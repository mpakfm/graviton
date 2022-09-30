<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 08.07.2022
 * Time: 01:03
 *
 * @var CUser $USER
 */
/** @var CMain $APPLICATION */
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Graviton - Only for admin");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/main.min.css">', true);
Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/extend.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/main.min.js" defer="defer"></script>', false, AssetLocation::BODY_END);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/vendor.min.js" defer="defer"></script>', false, AssetLocation::BODY_END);

if (!$USER->IsAdmin()) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/403.php";
    die();
}
?>
    <main class="main">
        <section class="news-detail">
            <div class="l-default">
                <h1>Only for admin</h1>
            </div>
        </section>
    </main>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
