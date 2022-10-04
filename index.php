<?php
/**
 * Created by PhpStorm.
 * User: sfomin
 * Date: 11.09.2022
 * Time: 19:53
 * @var $APPLICATION
 * @var CUser $USER
 */

//use Bitrix\Main\Page\Asset;
//use Bitrix\Main\Page\AssetLocation;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Graviton");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

?>

<?$APPLICATION->IncludeComponent("mpakfm:one.template", "index.page", ["CACHE" => "Y"]);?>

<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
