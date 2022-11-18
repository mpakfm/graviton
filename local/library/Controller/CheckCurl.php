<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    18.11.2022
 * Time:    14:17
 */

namespace Library\Controller;

use Library\Tools\LogWriter;

class CheckCurl extends AbstractController
{
    public function tryRequestAction()
    {
        $postdata = file_get_contents("php://input");
        LogWriter::obj($postdata)->title('[CheckCurl::tryRequestAction] $postdata');
        return true;
    }
}
