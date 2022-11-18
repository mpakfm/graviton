<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    18.11.2022
 * Time:    14:22
 */

namespace Library\Tools;

use Mpakfm\Printu;

class B24Sender
{
    const region        = 895;
    const channel       = 2934;
    const channel_mail  = 880;
    const channel_phone = 881;
    const bitrix24_url  = 'https://bitrix.3l.ru/rest/1/{%TOKEN%}/lll.singlewindow.graviton.add';

    public static function onAfterResultAdd($webFormId, $resultId)
    {
        $formResult = \CFormResult::GetByID($resultId)->Fetch();

        $stmt = \CFormField::GetList($webFormId, 'ALL');
        $fields = [];
        while ($field = $stmt->Fetch()) {
            $fields[$field['COMMENTS']] = $field['ID'];
        }
        $data = [];
        switch ($webFormId) {
            case"1": // Служба поддержки
                $data['email']       = $_POST['form_email_' . $fields['email']];
                $data['name']        = $_POST['form_text_' . $fields['fio']];
                $data['phone']       = $_POST['form_text_' . $fields['phone']];
                $data['description'] = 'Название формы: ' . $formResult['NAME'] . ' Серийный номер: ' . $_POST['form_text_' . $fields['serial']] . ' Вопрос: ' . $_POST['form_textarea_' . $fields['question']];
                break;
            case"2": // Отзывы
                $data['email']       = $_POST['form_email_' . $fields['email']];
                $data['name']        = $_POST['form_text_' . $fields['fio']];
                $data['phone']       = $_POST['form_text_' . $fields['phone']];
                $data['description'] = 'Название формы: ' . $formResult['NAME'] . ' Категория: ' . $_POST['form_dropdown_' . $fields['category']] . ' Общий рейтинг: ' . $_POST['form_radio_' . $fields['rating']] . ' ' . $_POST['form_textarea_' . $fields['review']];
                break;
            case"3": // Контакты для прессы
                $data['email']       = $_POST['form_email_' . $fields['email']];
                $data['name']        = $_POST['form_text_' . $fields['fio']];
                $data['phone']       = $_POST['form_text_' . $fields['phone']];
                $data['description'] = 'Название формы: ' . $formResult['NAME'] . ' Ваше предложение: ' . $_POST['form_textarea_' . $fields['company']];
                break;
            case"4": // Запросить дополнительный драйвер
                $data['email']       = $_POST['form_email_' . $fields['d-email']];
                $data['name']        = $_POST['form_text_' . $fields['d-fio']];
                $data['phone']       = $_POST['form_text_' . $fields['d-phone']];
                $data['description'] = 'Название формы: ' . $formResult['NAME'] . ' Серийный номер: ' . $_POST['form_text_' . $fields['d-serial']] . ' Вопрос: ' . $_POST['form_textarea_' . $fields['d-question']];
                break;
        }
        self::sendData($data);
    }

    public static function sendData(array $data)
    {
        if (ROOT_SERVER == 'PRODUCTION') {
            $landerUrl = str_replace('{%TOKEN%}', B24_TOKEN, self::bitrix24_url);
        } else {
            $landerUrl = ROOT_SERVER_URL . '/local/ajax/controller.php?className=CheckCurl&action=tryRequest';
        }

        $dt = new \DateTime();
        $data['date']    = $dt->format('Y-m-d H:i:s');
        $data['region']  = self::region;
        $data['channel'] = self::channel;
        if (array_key_exists('email', $data) && !array_key_exists('phone', $data)) {
            $data['channel_answer'] = self::channel_mail;
        } elseif (!array_key_exists('email', $data) && array_key_exists('phone', $data)) {
            $data['channel_answer'] = self::channel_phone;
        } else {
            $data['channel_answer'] = self::channel_mail;
        }

        $postFields = json_encode($data);
        $resource   = curl_init($landerUrl);

        curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($resource, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($resource, CURLOPT_POST, true);
        curl_setopt($resource, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($resource, CURLOPT_SSL_VERIFYPEER, false);

        $headers = [
            'Content-Type: application/json'
        ];
        curl_setopt($resource, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($resource);
        curl_close($resource);
        Printu::obj($response)->title('[B24Sender::sendData] $response');
        return $response;
    }
}
