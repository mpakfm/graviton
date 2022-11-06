<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    06.11.2022
 * Time:    16:29
 */
/** @var CMain $APPLICATION */
/** @var int $ID */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;

define("BODY_CLASS", "SERVICE-DRIVERS");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$iblockDrivers = CacheSelector::getIblockId('drivers', 'files');

if ((int) $ID) {
    $file = CacheSelector::getFile($iblockDrivers, $ID, 'FILE', 3600);
    if (!$file) {
        require($_SERVER["DOCUMENT_ROOT"]."/404.php");
        die();
    }
    while (ob_get_level()) {
        ob_end_clean();
    }
    $filePath = $_SERVER["DOCUMENT_ROOT"] . '/upload/' . $file['SUBDIR'] . '/' . $file['FILE_NAME'];
    header('Content-Description: File Transfer');
    header('Content-Type: ' . $file['CONTENT_TYPE']);
    header('Content-Disposition: attachment; filename=' . basename($file['ORIGINAL_NAME']));
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . $file['FILE_SIZE']);
    readfile($filePath);
    exit();

}

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/drivers_page.css">', true);
Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/drivers_extend.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/drivers_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/drivers_extend.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

$formServiceId  = CacheSelector::getFormId('SIMPLE_FORM_4');

$iblock     = CacheSelector::getIblockId('pages', 'content');
$menuParams = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $iblock,
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "PARENT_SECTION_CODE" => "support",
    "CACHE_TYPE" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
];

$pageItem = CacheSelector::getIblockElement($iblock, 'zagruzka-drayverov');

$clientParams = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $iblockDrivers,
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "PARENT_SECTION_CODE" => "clients",
    "PROPERTY_CODE" => ["FILE"],
    "CACHE_TYPE" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
];
$serverParams = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $iblockDrivers,
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "PARENT_SECTION_CODE" => "servers",
    "PROPERTY_CODE" => ["FILE"],
    "CACHE_TYPE" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
];

?>
    <main class="main">
        <?$APPLICATION->IncludeComponent("mpakfm:news.list","menu.support", $menuParams);?>
        <section class="s-banner">
            <div class="l-default">
                <div class="s-banner__title">
                    <h1 class="title title--h1-banner s-banner__title title--medium">Драйвера</h1>
                </div>
            </div>
            <div class="s-banner__img">
                <picture>
                    <source srcset="img/drivers/banner.jpg" type="image/jpg" media="(min-width: 768px)"/>
                    <source srcset="img/drivers/banner-small.jpg" type="image/jpg" media="(max-width: 768px)"/><img src="img/drivers/banner.jpg" alt=""/>
                </picture>
            </div>
        </section>
        <section class="s-drivers">
            <div class="l-default">
                <div class="s-drivers__text">Требуется обслуживание или техническая поддержка? Заполните заявку онлайн, и мы вам поможем.</div>
                <div class="s-drivers__caption">Обновление</div>
                <div class="s-drivers__content">
                    <div class="s-drivers__search">
                        <div class="s-drivers__search-input">
                            <input type="text" placeholder="Ноутбук">
                            <div class="s-drivers__search-icon">
                                <svg class="ico ico-mono-search">
                                    <use xlink:href="img/sprite-mono.svg#ico-mono-search"></use>
                                </svg>
                            </div>
                            <button class="fancybox-button fancybox-button--close">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg>
                            </button>
                        </div>
                        <div class="s-drivers__search-btn btn">Поиск</div>
                    </div>
                    <div class="s-drivers__tabs">
                        <div class="s-drivers__tab active" id="table-1">
                            <div class="s-drivers__tab-text">Клиентские решения</div>
                        </div>
                        <div class="s-drivers__tab" id="table-2">
                            <div class="s-drivers__tab-text">Серверные решения</div>
                        </div>
                    </div>
                    <div class="s-drivers__tables">
                        <div class="s-drivers__table active" id="table-1">
                            <?$APPLICATION->IncludeComponent("mpakfm:news.list","drivers", $clientParams);?>
                        </div>
                        <div class="s-drivers__table" id="table-2">
                            <?$APPLICATION->IncludeComponent("mpakfm:news.list","drivers", $serverParams);?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="l-default">
            <?$APPLICATION->IncludeComponent("bitrix:form.result.new","drivers",Array(
                    "SEF_MODE" => "Y",
                    "WEB_FORM_ID" => $formServiceId,
                    "LIST_URL" => "/page/" . Breadcrumb::$uri,
                    "EDIT_URL" => Breadcrumb::$uri,
                    "SUCCESS_URL" => Breadcrumb::$uri,
                    "CHAIN_ITEM_TEXT" => "",
                    "CHAIN_ITEM_LINK" => "",
                    "IGNORE_CUSTOM_TEMPLATE" => "Y",
                    "USE_EXTENDED_ERRORS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "SEF_FOLDER" => "/",
                    "VARIABLE_ALIASES" => Array(
                    )
                )
            );?>
        </div>
        <div class="s-feedback">
            <div class="s-feedback__content">
                <div class="s-feedback__content-top">
                    <div class="l-default">
                        <div class="s-feedback__item">
                            <div class="s-feedback__item-text">Остались вопросы? Свяжитесь с нами</div>
                        </div>
                        <div class="s-feedback__item"><a class="s-feedback__item-btn" href="mailto:sale@graviton.ru"> Связаться с нами</a></div>
                    </div>
                </div>
                <div class="s-feedback__content-bottom">
                    <div class="l-default">
                        <div class="s-feedback__item">
                            <div class="s-feedback__item-note">*Вышеприведенные характеристики являются теоретическими величинами и зависят от дизайна продукта. Для предоставления точной информации об устройствах и для обеспечения ее соответствия с харакетристиками и функциями фактических продуктов компания Гравитон может вносить изменения в режиме реального времени. Сведения о продукции могут быть изменены без предварительного уведомления.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
