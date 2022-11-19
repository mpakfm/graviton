<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    19.11.2022
 * Time:    13:22
 */

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$landerUrl = 'https://graviton.ru/local/ajax/controller.php?className=CheckCurl&action=tryRequest';

$resource   = curl_init($landerUrl);

echo '$resource: ' . $resource;
