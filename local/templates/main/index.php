<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    09.10.2022
 * Time:    0:01
 */
/** @var CMain $APPLICATION */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (!defined("ERROR_404"))
    define("ERROR_404", "Y");

\CHTTP::setStatus("404 Not Found");

if ($APPLICATION->RestartWorkarea())
{
    require(\Bitrix\Main\Application::getDocumentRoot() . "/404.php");
    die();
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
