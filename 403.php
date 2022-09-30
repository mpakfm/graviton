<?php
/** @var $APPLICATION */

include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("403 Forbidden");
@define("ERROR_403", "Y");

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Graviton - 403 Forbidden");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/main.min.css">', true);
Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/extend.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/main.min.js" defer="defer"></script>', false, AssetLocation::BODY_END);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/vendor.min.js" defer="defer"></script>', false, AssetLocation::BODY_END);

?>
<main class="main">
    <div class="l-content">
        <h1>Доступ запрещен</h1>
        <div class="news__container">
            <div class="bx-404-text-block">Доступ запрещен. Ошибка 403.</div>
            <div class="bx-404-text-block">Вернитесь на <a href="/">главную</a></div>
        </div>
    </div>
</main>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>
