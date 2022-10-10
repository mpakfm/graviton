<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    11.09.2022
 * Time:    22:16
 * @var CMain $APPLICATION
 */

use Library\Tools\CacheSelector;

define("BODY_CLASS", "PAGE");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$iblock = CacheSelector::getIblockId('pages', 'content');

$params = [
    "DISPLAY_DATE"              => "Y",
    "DISPLAY_NAME"              => "Y",
    "DISPLAY_PICTURE"           => "Y",
    "DISPLAY_PREVIEW_TEXT"      => "N",
    "USE_SHARE"                 => "N",
    "AJAX_MODE"                 => "N",
    "IBLOCK_TYPE"               => "content",
    "IBLOCK_ID"                 => $iblock,
    "ELEMENT_ID"                => (array_key_exists('ELEMENT_ID', $_REQUEST) && $_REQUEST["ELEMENT_ID"]) ? $_REQUEST["ELEMENT_ID"] : null,
    "ELEMENT_CODE"              => (array_key_exists('CODE', $_REQUEST) && $_REQUEST["CODE"]) ? $_REQUEST["CODE"] : null,
    "CHECK_DATES"               => "N",
    "FIELD_CODE"                => ['TAGS', 'DETAIL_TEXT'],
    "PROPERTY_CODE"             => [],
    "DETAIL_URL"                => "",
    "SET_TITLE"                 => "Y",
    "SET_CANONICAL_URL"         => "Y",
    "SET_BROWSER_TITLE"         => "Y",
    "BROWSER_TITLE"             => "-",
    "SET_META_KEYWORDS"         => "Y",
    "META_KEYWORDS"             => "-",
    "SET_META_DESCRIPTION"      => "Y",
    "META_DESCRIPTION"          => "-",
    "SET_STATUS_404"            => "Y",
    "SET_LAST_MODIFIED"         => "Y",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN"        => "N",
    "ADD_ELEMENT_CHAIN"         => "N",
    "ACTIVE_DATE_FORMAT"        => "d.m.Y",
    "USE_PERMISSIONS"           => "N",
    "CACHE_TYPE"                => "A",
    "CACHE_TIME"                => "3600",
    "CACHE_GROUPS"              => "Y",
    "SHOW_404"                  => "Y",
    "MESSAGE_404"               => "MESSAGE 404",
    "STRICT_SECTION_CHECK"      => "Y",
    "PAGER_BASE_LINK"           => "",
    "PAGER_PARAMS_NAME"         => "arrPager",
];

?>

<?$APPLICATION->IncludeComponent("bitrix:news.detail", "custom", $params);?>

<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
