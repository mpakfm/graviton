<?php
/**
 * Created by PhpStorm.
 * User: sfomin
 * Date: 11.09.2022
 * Time: 19:53
 * @var $APPLICATION
 * @var CUser $USER
 */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Graviton");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/main.min.css">', true);
Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/extend.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/main.min.js" defer="defer"></script>', false, AssetLocation::BODY_END);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/vendor.min.js" defer="defer"></script>', false, AssetLocation::BODY_END);

//Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/css/main.css">', true);
//Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/css/menu.section.list.css">', true);
//Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/css/slider.section.list.css">', true);
//Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/css/index.cases.css">', true);
//Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/css/index.partners.css">', true);

?>

<?$APPLICATION->IncludeComponent("mpakfm:one.template", "index.page", ["CACHE" => "Y"]);?>

<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
