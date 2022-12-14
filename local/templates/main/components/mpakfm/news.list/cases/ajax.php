<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    14.11.2022
 * Time:    1:48
 */
/** @var CUser $USER */
/** @var CMain $APPLICATION */

use Library\Tools\CacheSelector;

require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");

$iblock = CacheSelector::getIblockId('cases', 'content');

$SECTION = array_key_exists('section', $_REQUEST) ? $_REQUEST['section'] : '';

$params = [
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "AJAX_MODE" => "Y",
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $iblock,
    "NEWS_COUNT" => "2",
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "DESC",
    "SORT_BY2" => "NAME",
    "SORT_ORDER2" => "ASC",
    "FILTER_NAME" => "filter",
    "FIELD_CODE" => ["ID", "PREVIEW_TEXT", "IBLOCK_SECTION_ID"],
    "PROPERTY_CODE" => ["SUB_TITLE", "COMPANY", "LOGO"],
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
    "PAGER_TEMPLATE" => "cases",
    "PAGER_DESC_NUMBERING" => "Y",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_BASE_LINK_ENABLE" => "Y",
    "SET_STATUS_404" => "Y",
    "SHOW_404" => "Y",
    "MESSAGE_404" => "",
    "PAGER_BASE_LINK" => "/local/templates/main/components/mpakfm/news.list/cases/ajax.php/?" . ($SECTION != '' ? 'section=' . $SECTION : ''),
    "PAGER_PARAMS_NAME" => "arrPager",
    "AJAX_OPTION_JUMP" => "Y",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
];
?>
<?$APPLICATION->IncludeComponent("mpakfm:news.list","cases", $params);?>
