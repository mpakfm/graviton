<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    24.09.2022
 * Time:    1:36
 */
/** @var $APPLICATION */
/** @var CUser $USER */

use Library\Tools\CacheSelector;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$textIblock = CacheSelector::getIblockId('text', 'content');

$screen2 = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $textIblock,
    "ELEMENT_CODE" => "screen2",
    "CHECK_DATES" => "N",
    "FIELD_CODE" => ["ID", "CODE"],
    "PROPERTY_CODE" => ["TEXT"],
    "DETAIL_URL" => "",
    "SET_TITLE" => "N",
    "SET_CANONICAL_URL" => "N",
    "SET_BROWSER_TITLE" => "N",
    "BROWSER_TITLE" => "-",
    "SET_META_KEYWORDS" => "N",
    "META_KEYWORDS" => "-",
    "SET_META_DESCRIPTION" => "N",
    "META_DESCRIPTION" => "-",
    "SET_STATUS_404" => "N",
    "SET_LAST_MODIFIED" => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "ADD_ELEMENT_CHAIN" => "N",
    "USE_PERMISSIONS" => "N",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_GROUPS" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "SHOW_404" => "N",
    "MESSAGE_404" => "",
    "STRICT_SECTION_CHECK" => "N",
    "PAGER_BASE_LINK" => "",
    "PAGER_PARAMS_NAME" => "arrPager",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "AJAX_OPTION_HISTORY" => "N",
];
$screenLast = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $textIblock,
    "ELEMENT_CODE" => "screen-last",
    "CHECK_DATES" => "N",
    "FIELD_CODE" => ["ID", "CODE"],
    "PROPERTY_CODE" => ["TEXT"],
    "DETAIL_URL" => "",
    "SET_TITLE" => "N",
    "SET_CANONICAL_URL" => "N",
    "SET_BROWSER_TITLE" => "N",
    "BROWSER_TITLE" => "-",
    "SET_META_KEYWORDS" => "N",
    "META_KEYWORDS" => "-",
    "SET_META_DESCRIPTION" => "N",
    "META_DESCRIPTION" => "-",
    "SET_STATUS_404" => "N",
    "SET_LAST_MODIFIED" => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "ADD_ELEMENT_CHAIN" => "N",
    "USE_PERMISSIONS" => "N",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_GROUPS" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "SHOW_404" => "N",
    "MESSAGE_404" => "",
    "STRICT_SECTION_CHECK" => "N",
    "PAGER_BASE_LINK" => "",
    "PAGER_PARAMS_NAME" => "arrPager",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "AJAX_OPTION_HISTORY" => "N",
];

$catalogSlider = CacheSelector::getIblockId('catslider', 'content');

$slider = [
    "IBLOCK_TYPE"         => "content",
    "IBLOCK_ID"           => $catalogSlider,
    "TOP_DEPTH"           => 2,
    "SECTION_FIELDS"      => ["ID", "NAME", "DESCRIPTION"],
    "SECTION_USER_FIELDS" => ["UF_SUBTITLE", "UF_RAM", "UF_HDD", "UF_CPU", "UF_SCREEN", "UF_SLIDER_BACK", "UF_SLIDER_PIC", "UF_LINK"],
    //"SECTIONS"          => ["header"],
    "VIEW_MODE"           => "LIST",
    "SORT_BY1"            => "SORT",
    "SORT_ORDER1"         => "ASC",
    "SORT_BY2"            => "NAME",
    "SORT_ORDER2"         => "ASC",
    "CACHE_TYPE"          => "A",
    "CACHE_TIME"          => "3600",
    "CACHE_GROUPS"        => "Y",
];
$slider = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $catalogSlider,
    //"SECTION_FIELDS" => Array("UF_LINK"),
    "SECTION_USER_FIELDS" => Array("UF_LINK"),
    "SECTION_SORT_FIELD" => "sort",
    "SECTION_SORT_ORDER" => "asc",
    "ELEMENT_SORT_FIELD" => "sort",
    "ELEMENT_SORT_ORDER" => "asc",
    "FILTER_NAME" => "arrFilter",
    "SECTION_URL" => "",
    "DETAIL_URL" => "",
    //"BASKET_URL" => "/personal/basket.php",
    "ACTION_VARIABLE" => "action",
    "PRODUCT_ID_VARIABLE" => "id",
    "PRODUCT_QUANTITY_VARIABLE" =>  "quantity",
    "PRODUCT_PROPS_VARIABLE" =>  "prop",
    "SECTION_ID_VARIABLE" => "SECTION_ID",
    "DISPLAY_COMPARE" => "Y",
    "USE_MAIN_ELEMENT_SECTION" => "Y",
    "SECTION_COUNT" => "20",
    "ELEMENT_COUNT" => "9",
    "LINE_ELEMENT_COUNT" => "3",
    "PROPERTY_CODE" => Array("UPTITLE", "SUBTITLE", "RAM", "HDD", "CPU", "DISPLAY", "TEXT", "CORNER", "LINK", "MB1", "MB1"),
    //"PRICE_CODE" => Array("BASE"),
    "USE_PRICE_COUNT" => "N",
    //"SHOW_PRICE_COUNT" => "1",
    "PRICE_VAT_INCLUDE" => "N",
    //"PRODUCT_PROPERTIES" => array(),
    "USE_PRODUCT_QUANTITY" => "N",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
    "HIDE_NOT_AVAILABLE" => "N",
    "QUANTITY_FLOAT" => "N",
    //"CONVERT_CURRENCY" => "Y",
    //"CURRENCY_ID" => "RUB",
];

$sliderNews = [
    "IBLOCK_TYPE"            => "content",
    "IBLOCKS"                => ["events", "news"], //news, events
    "LIMIT"                  => ["events" => 10, "news" => 2], //news, events
    "FIELD_CODE"             => ["ID", "CODE", "NAME", "PROPERTY_TOP_DATE", "PROPERTY_TOP_TITLE", "PROPERTY_TOP_PLACE"], // "PROPERTY_IS_PUB", "PROPERTY_TOP_DATE", "PROPERTY_IS_SLIDER"
    "FILTER_REQUIRED_FIELDS" => ["PROPERTY_IS_SLIDER"],

    "IS_ACTIVE_DATE"     => false,
    "SORT_BY1"           => "active_from",
    "SORT_ORDER1"        => "desc",
    "SORT_BY2"           => "name",
    "SORT_ORDER2"        => "asc",
    "TITLE"              => "Новости",
    "CACHE_TYPE"         => "A",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];

$cases = [
    "IBLOCK_TYPE"        => "content",
    "IBLOCKS"            => ["cases"],
    "SECTIONS"           => ["header"],
    "NEWS_COUNT"         => 2,
    "FIELD_CODE"         => ["ID", "CODE", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "PROPERTY_SUB_TITLE"],
    "SORT_BY1"           => "SORT",
    "SORT_ORDER1"        => "ASC",
    "SORT_BY2"           => "NAME",
    "SORT_ORDER2"        => "ASC",
    "TITLE"              => "Меню",
    "CACHE_TYPE"         => "A",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];
$partners = [
    "IBLOCK_TYPE"        => "content",
    "IBLOCKS"            => ["partners"],
    "SECTIONS"           => ["header"],
    "FIELD_CODE"         => ["ID", "CODE", "NAME", "PREVIEW_PICTURE"],
    "SORT_BY1"           => "SORT",
    "SORT_ORDER1"        => "ASC",
    "SORT_BY2"           => "NAME",
    "SORT_ORDER2"        => "ASC",
    "TITLE"              => "Меню",
    "CACHE_TYPE"         => "A",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];

?>

<main class="main">
    <section class="main-top" style="background-image: url('img/main-top/bg.jpg');">
        <h1 class="title title--h1 title--fade fancy">СДЕЛАНО В РОССИИ </h1>
        <div class="main-top__notebook">
            <div class="main-top__notebook-img">
                <picture>
                    <source data-srcset="img/main-top/notebook.webp" type="image/webp"/>
                    <source data-srcset="img/main-top/notebook.png" type="image/png"/><img src="img/main-top/notebook.png" alt=""/>
                </picture>
            </div>
            <video class="main-top__notebook-video" autoplay="autoplay" loop="loop" preload="auto" muted>
                <source src="videos/1.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
            </video><a class="main-top__more non-active" href="javascript:void(0);">
                <div class="main-top__more-text">Подробнее о продукте</div>
                <div class="main-top__more-icon">
                    <svg class="ico ico-mono-arrow-more">
                        <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-more"></use>
                    </svg>
                </div></a>
        </div>
        <div class="main-top__bottom">
            <div class="main-top__bottom-text">В центре притяжения Российских технологий </div>
        </div>
    </section>

    <?$APPLICATION->IncludeComponent("bitrix:news.detail","index.screen2", $screen2);?>

    <?$APPLICATION->IncludeComponent("bitrix:catalog.sections.top","index.slider", $slider);?>

    <?$APPLICATION->IncludeComponent("mpakfm:slider.news", "slider.top", $sliderNews);?>

    <?$APPLICATION->IncludeComponent("mpakfm:news.line", "index.case", $cases);?>

    <?$APPLICATION->IncludeComponent("mpakfm:news.line", "index.partners", $partners);?>

    <?$APPLICATION->IncludeComponent("bitrix:news.detail","index.screenLast", $screenLast);?>

</main>
