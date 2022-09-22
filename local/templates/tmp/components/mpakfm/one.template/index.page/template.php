<?php
/** @var $APPLICATION */
/** @var CUser $USER */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$menuHeader = [
    "IBLOCK_TYPE"        => "content",
    "IBLOCKS"            => ["menu"],
    "SECTIONS"           => ["header"],
    "FIELD_CODE"         => ["ID", "CODE", "NAME", "PROPERTY_LINK", "PROPERTY_BLANK"],
    "SORT_BY1"           => "SORT",
    "SORT_ORDER1"        => "ASC",
    "SORT_BY2"           => "NAME",
    "SORT_ORDER2"        => "ASC",
    "TITLE"              => "Меню",
    "CACHE_TYPE"         => "Y",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];
$cases = [
    "IBLOCK_TYPE"        => "content",
    "IBLOCKS"            => ["cases"],
    "SECTIONS"           => ["header"],
    "FIELD_CODE"         => ["ID", "CODE", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "PROPERTY_SUB_TITLE"],
    "SORT_BY1"           => "SORT",
    "SORT_ORDER1"        => "ASC",
    "SORT_BY2"           => "NAME",
    "SORT_ORDER2"        => "ASC",
    "TITLE"              => "Меню",
    "CACHE_TYPE"         => "Y",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];
$sliderNews = [
    "IBLOCK_TYPE"            => "content",
    "IBLOCKS"                => ["events", "news"], //news, events
    "FIELD_CODE"             => ["ID", "CODE", "NAME", "PROPERTY_TOP_DATE", "PROPERTY_TOP_TITLE", "PROPERTY_TOP_PLACE"], // "PROPERTY_IS_PUB", "PROPERTY_TOP_DATE", "PROPERTY_IS_SLIDER"
    "FILTER_REQUIRED_FIELDS" => ["PROPERTY_IS_PUB", "PROPERTY_IS_SLIDER"],

    "IS_ACTIVE_DATE"     => false,
    "SORT_BY1"           => "SORT",
    "SORT_ORDER1"        => "ASC",
    "SORT_BY2"           => "NAME",
    "SORT_ORDER2"        => "ASC",
    "TITLE"              => "Новости",
    "CACHE_TYPE"         => "N",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];
$slider = [
    "IBLOCK_TYPE"         => "catalog",
    "IBLOCK_ID"           => 6,
    "TOP_DEPTH"           => 2,
    "SECTION_FIELDS"      => ["ID", "NAME", "DESCRIPTION"],
    "SECTION_USER_FIELDS" => ["UF_SUBTITLE", "UF_RAM", "UF_HDD", "UF_CPU", "UF_SCREEN", "UF_SLIDER_BACK", "UF_SLIDER_PIC"],
    //"SECTIONS"          => ["header"],
    "VIEW_MODE"           => "LIST",
    "SORT_BY1"            => "SORT",
    "SORT_ORDER1"         => "ASC",
    "SORT_BY2"            => "NAME",
    "SORT_ORDER2"         => "ASC",
    //"TITLE"             => "Меню",
    "CACHE_TYPE"          => "Y",
    "CACHE_TIME"          => "3600",
    "CACHE_GROUPS"        => "Y",
];

$menuFooter = [
    "IBLOCK_TYPE"        => "content",
    "IBLOCKS"            => ["menu"],
    "SECTIONS"           => ["footer"],
    "FIELD_CODE"         => ["ID", "CODE", "NAME", "PROPERTY_LINK", "PROPERTY_BLANK"],
    "SORT_BY1"           => "SORT",
    "SORT_ORDER1"        => "ASC",
    "SORT_BY2"           => "NAME",
    "SORT_ORDER2"        => "ASC",
    "TITLE"              => "Меню",
    "CACHE_TYPE"         => "Y",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];

$menuCopyright = [
    "IBLOCK_TYPE"        => "content",
    "IBLOCKS"            => ["menu"],
    "SECTIONS"           => ["copyright"],
    "FIELD_CODE"         => ["ID", "CODE", "NAME", "PROPERTY_LINK", "PROPERTY_BLANK"],
    "SORT_BY1"           => "SORT",
    "SORT_ORDER1"        => "ASC",
    "SORT_BY2"           => "NAME",
    "SORT_ORDER2"        => "ASC",
    "TITLE"              => "Меню",
    "CACHE_TYPE"         => "Y",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];

$frame = $this->createFrame()->begin();
?>

<div class="content">
    <h1>Главная страница</h1>

    <div class="box">
        <h3>Для проверок</h3>
        <ul>
            <li><a href="/page/about">О компании</a></li>
            <li><a href="/unknown">Unknown page (тест ошибки 404)</a></li>
            <li><a href="/only-for-admin">Только для админов (тест ошибки 403)</a></li>
            <li><a href="/error">Ошибка (тест ошибки 500)</a></li>
        </ul>
    </div>
    <div class="box">
        <h3>Заготовки компонентов главной страницы</h3>

        <div style="margin: 20px;">
            <p class="tmp-component-name">Меню в шапке</p>
            <?$APPLICATION->IncludeComponent("mpakfm:news.line", "top.menu", $menuHeader);?>
        </div>

        <div style="margin: 20px;">
            <p class="tmp-component-name">Слайдер секций товарного каталога</p>
            <?$APPLICATION->IncludeComponent("mpakfm:slider.section.list", "", $slider);?>
        </div>

        <div style="margin: 20px;">
            <p class="tmp-component-name">Слайдер Мероприятия и Новости</p>
            <?$APPLICATION->IncludeComponent("mpakfm:slider.news", "slider.top", $sliderNews);?>
        </div>

        <div style="margin: 20px;">
            <p class="tmp-component-name">Кейсы</p>
            <?$APPLICATION->IncludeComponent("mpakfm:news.line", "index.case", $cases);?>
        </div>

        <div style="margin: 20px;">
            <p class="tmp-component-name">Меню в подвале</p>
            <?$APPLICATION->IncludeComponent("mpakfm:menu.section.list","",
                Array(
                    "VIEW_MODE" => "TEXT",
                    "SHOW_PARENT_NAME" => "Y",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "5",
                    "SECTION_ID" => 17,
                    "SECTION_CODE" => "",
                    "SECTION_URL" => "",
                    "COUNT_ELEMENTS" => "Y",
                    "TOP_DEPTH" => "2",
                    "SECTION_FIELDS" => ["ID", "CODE", "NAME"],
                    "SECTION_USER_FIELDS" => ["UF_LINK", "UF_BLANK"],
                    "ELEMENT_FIELDS" => ["ID", "CODE", "NAME"],
                    "ELEMENT_USER_FIELDS" => ["PROPERTY_LINK", "PROPERTY_LINK", "PROPERTY_BLANK", "PROPERTY_POPUP_CLASS"],
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "CACHE_TYPE" => "N",
                    "CACHE_TIME" => "36000000",
                    "CACHE_NOTES" => "",
                    "CACHE_GROUPS" => "Y"
                )
            );?>

        </div>
        <div style="margin: 20px;">
            <p class="tmp-component-name">Меню копирайта</p>
            <?$APPLICATION->IncludeComponent("mpakfm:news.line", "top.menu", $menuCopyright);?>
        </div>
    </div>
</div>
<?php

$frame->end();

?>
