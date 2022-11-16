<?php
/**
 * Created by PhpStorm.
 * User: sfomin
 * Date: 11.09.2022
 * Time: 19:53
 * @var $APPLICATION
 * @var CUser $USER
 */

use Library\Tools\Seo;

define("BODY_CLASS", "INDEX");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

Seo::setIndex();

?>

<?$APPLICATION->IncludeComponent("mpakfm:one.template", "index.page", ["CACHE" => "N"]);?>

<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
