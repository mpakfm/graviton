<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    08.10.2022
 * Time:    22:40
 */

namespace Library\Controller;

use Bitrix\Main\Config\Option;
use Library\Tools\LogWriter;

class Partners extends AbstractController
{
    public function mailerAction()
    {
        $subj = "Форма - Стать Партнёром";
        $text = "
Форма регистрации \"Стать партнером\"

Email: {$_POST['email']}
ФИО: {$_POST['name']}
Телефон: {$_POST['phone']}
ИНН: {$_POST['inn']}
Название компании: {$_POST['company']}

        ";

        $option = Option::get('main', 'email_from');
        mail($option, $subj, $text);
        mail('fsg79@yandex.ru', $subj . ' | ya', $text);
        mail('mpakfm@gmail.com', $subj . ' | gm', $text);
        mail('info@mpakfm.ru', $subj . ' | mp', $text);
        LogWriter::info($text)->title('to ' . $option . '$text')->file('mailer');

        $this->response['result'] = true;
        return true;
    }
}
