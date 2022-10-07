<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    25.09.2022
 * Time:    15:20
 */
/** @var CMain $APPLICATION */
/** @var string $CODE */
/** @var string $OTHER */

use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$breadcrumb = Breadcrumb::init();
$breadcrumb->setIblock('events', 'content')->setChain('events');

$APPLICATION->SetTitle("Graviton - Мероприятия");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

$iblock = CacheSelector::getIblockId('events', 'content');

\Mpakfm\Printu::obj($CODE)->title('[events] $CODE');

if (!empty($CODE)) {
    $params = [
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "USE_SHARE" => "N",
        "SHARE_HIDE" => "N",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => $iblock,
        "ELEMENT_CODE" => $CODE,
        "CHECK_DATES" => "Y",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
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
        "USE_PERMISSIONS" => "Y",
        "GROUP_PERMISSIONS" => Array("1"),
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
        "AJAX_OPTION_JUMP" => "N",
    ];
} else {
    $params = [
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "Y",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => $iblock,
        "NEWS_COUNT" => "10",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
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
        "PARENT_SECTION_CODE" => '',
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Мероприятия",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
    ];
}

?>
<main class="main">
    <?php if (!empty($CODE)) { ?>
        <?$APPLICATION->IncludeComponent("bitrix:news.detail","event",$params);?>
    <?php } else { ?>
        <?$APPLICATION->IncludeComponent("bitrix:news.list","events",$params);?>
    <?php } ?>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>