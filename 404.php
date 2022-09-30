<?php
/** @var CMain $APPLICATION */
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена | 404 Not Found");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/main.min.css">', true);
Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/extend.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/main.min.js" defer="defer"></script>', false, AssetLocation::BODY_END);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/vendor.min.js" defer="defer"></script>', false, AssetLocation::BODY_END);

?>
<main class="main">
    <div class="l-content">
        <h1>Cтраница не найдена</h1>
        <div class="news__container">
            <div class="bx-404-block"><img src="<?=SITE_TEMPLATE_PATH?>/img/404.jpg" alt=""></div>
            <div class="bx-404-text-block">Неправильно набран адрес, <br>или такой страницы на сайте больше не существует.</div>
            <div class="bx-404-text-block">Вернитесь на <a href="/">главную</a></div>
        </div>
	</div>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
