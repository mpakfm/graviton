<?php
/**
 * Created by PhpStorm.
 * User: sfomin
 * Date: 11.09.2022
 * Time: 19:53
 * @var $APPLICATION
 * @var CUser $USER
 */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Graviton");

?>

<?$APPLICATION->IncludeComponent("mpakfm:one.template", "index.page", ["CACHE" => "Y"]);?>

<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
