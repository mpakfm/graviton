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

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$iblock = CacheSelector::getIblockId('pages', 'content');

$params = [
    "DISPLAY_DATE"              => "Y",
    "DISPLAY_NAME"              => "Y",
    "DISPLAY_PICTURE"           => "Y",
    "DISPLAY_PREVIEW_TEXT"      => "Y",
    "USE_SHARE"                 => "Y",
    "SHARE_HIDE"                => "N",
    "SHARE_TEMPLATE"            => "",
    "SHARE_HANDLERS"            => ["delicious"],
    "SHARE_SHORTEN_URL_LOGIN"   => "",
    "SHARE_SHORTEN_URL_KEY"     => "",
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
    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
    "ADD_SECTIONS_CHAIN"        => "Y",
    "ADD_ELEMENT_CHAIN"         => "N",
    "ACTIVE_DATE_FORMAT"        => "d.m.Y",
    "USE_PERMISSIONS"           => "N",
    "CACHE_TYPE"                => "N",
    "CACHE_TIME"                => "3600",
    "CACHE_GROUPS"              => "Y",
    "DISPLAY_TOP_PAGER"         => "Y",
    "DISPLAY_BOTTOM_PAGER"      => "Y",
    "PAGER_TITLE"               => "Страница",
    "PAGER_TEMPLATE"            => "",
    "PAGER_SHOW_ALL"            => "Y",
    "PAGER_BASE_LINK_ENABLE"    => "Y",
    "SHOW_404"                  => "Y",
    "MESSAGE_404"               => "MESSAGE 404",
    "STRICT_SECTION_CHECK"      => "Y",
    "PAGER_BASE_LINK"           => "",
    "PAGER_PARAMS_NAME"         => "arrPager",
    "AJAX_OPTION_JUMP"          => "N",
    "AJAX_OPTION_STYLE"         => "Y",
    "AJAX_OPTION_HISTORY"       => "N",
];

?>

<?$APPLICATION->IncludeComponent("bitrix:news.detail", "custom", $params);?>

<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
