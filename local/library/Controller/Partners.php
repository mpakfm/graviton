<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    08.10.2022
 * Time:    22:40
 */

namespace Library\Controller;

use Mpakfm\Printu;

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
        mail('mpakfm@gmail.com', $subj, $text);

        $this->response['result'] = true;
        return true;
    }
}
