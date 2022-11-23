<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    08.10.2022
 * Time:    22:40
 */

namespace Library\Controller;

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Loader;
use Library\Tools\CacheSelector;
use Library\Tools\LogWriter;

class Partners extends AbstractController
{
    public function saveForm()
    {
        Loader::includeModule('form');
        // ID веб-формы
        $formId = CacheSelector::getFormId('SIMPLE_FORM_5');
        $sql = "SELECT * FROM b_form_field WHERE FORM_ID = '{$formId}' AND ACTIVE = 'Y'";
        $con = Application::getConnection();

        $stmt   = $con->query($sql);
        $items  = [];
        $ansIds = [];
        while ($row = $stmt->fetch()) {
            $ansIds[]          = $row['ID'];
            $items[$row['ID']] = $row;
        }
        $sql  = "SELECT * FROM  b_form_answer WHERE FIELD_ID IN (" . implode(', ', $ansIds) . ")";
        $stmt = $con->query($sql);

        while ($row = $stmt->fetch()) {
            $items[$row['FIELD_ID']]['ANSWER'] = $row['ID'];
        }

        $values = [];
        foreach ($items as $field) {
            switch ($field['COMMENTS']) {
                case"email":
                    $values['form_email_' . $field['ANSWER']] = $_POST[$field['COMMENTS']];
                    break;
                default:
                    $values['form_text_' . $field['ANSWER']] = $_POST[$field['COMMENTS']];
            }
        }
        try {
            \CFormResult::Add($formId, $values);
        } catch (\Throwable $exception) {
            LogWriter::info($exception->getMessage())->title('CFormResult::Add $exception');
        }
    }

    public function mailerAction()
    {
        $this->saveForm();
        $subj = "Форма - Стать Партнёром";
        $text = "
Форма регистрации \"Стать партнером\"

Email: {$_POST['email']}
ФИО: {$_POST['fio']}
Телефон: {$_POST['phone']}
ИНН: {$_POST['inn']}
Название компании: {$_POST['company']}

        ";

        $option = Option::get('main', 'email_from');
        mail($option, $subj, $text);
        mail('fsg79@yandex.ru', $subj . ' | ya', $text);
        LogWriter::info($text)->title('to ' . $option . '$text')->file('mailer');

        $this->response['result'] = true;
        return true;
    }
}
