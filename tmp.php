<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    19.11.2022
 * Time:    13:22
 */

require_once($_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php');
//require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

define("BODY_CLASS", "INDEX");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$landerUrl = 'https://graviton.ru/local/ajax/controller.php?className=CheckCurl&action=tryRequest';

$resource   = curl_init($landerUrl);
?>
<main class="main">
    <?php \Mpakfm\Printu::obj($resource)->title('$resource')->response('html'); ?>
</main>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
