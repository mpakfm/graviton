<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    25.09.2022
 * Time:    15:20
 */
/** @var CMain $APPLICATION */
/** @var CUser $USER */
/** @var string $SECTION */
/** @var string $ITEM */
/** @var string $OTHER */

use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;

define("BODY_CLASS", "NEWS");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$breadcrumb = Breadcrumb::init();

if (!empty($breadcrumb->uriItem)) {
    $ITEM = $breadcrumb->uriItem[0];
}

$APPLICATION->SetTitle("Graviton - Новости");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

$iblock = CacheSelector::getIblockId('news', 'content');

$filter = [];
if (!$USER->IsAdmin()) {
    $filter["!PROPERTY_IS_PUB"] = false;
}

if (!empty($ITEM)) {
    $params = [
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "USE_SHARE" => "Y",
        "SHARE_HIDE" => "N",
        "SHARE_TEMPLATE" => "",
        "SHARE_HANDLERS" => array("delicious"),
        "SHARE_SHORTEN_URL_LOGIN" => "",
        "SHARE_SHORTEN_URL_KEY" => "",
        "AJAX_MODE" => "Y",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => $iblock,
        "ELEMENT_CODE" => $ITEM,
        "CHECK_DATES" => "Y",
        "FILTER_NAME" => "filter",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
        "DETAIL_URL" => "",
        "SET_TITLE" => "Y",
        "SET_CANONICAL_URL" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "BROWSER_TITLE" => "-",
        "SET_META_KEYWORDS" => "Y",
        "META_KEYWORDS" => "-",
        "SET_META_DESCRIPTION" => "Y",
        "META_DESCRIPTION" => "-",
        "SET_STATUS_404" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Страница",
        "PAGER_TEMPLATE" => "",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "STRICT_SECTION_CHECK" => "Y",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
    ];
} else {
    $params = [
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => $iblock,
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "filter",
        "FIELD_CODE" => Array("ID", "PREVIEW_TEXT", "IBLOCK_SECTION_ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => ($SECTION ? $SECTION : ''),
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "news",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "/local/templates/main/components/mpakfm/news.list/custom/ajax.php/?" . ($SECTION != ''? 'section=' . $SECTION : ''),
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "Y",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
    ];
}

?>
<main class="main">
    <?php if (!empty($ITEM)) { ?>
        <?$APPLICATION->IncludeComponent("bitrix:news.detail","news",$params);?>
    <?php } else { ?>
        <?$APPLICATION->IncludeComponent("mpakfm:news.list","custom",$params);?>
    <?php } ?>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
