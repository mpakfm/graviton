<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    29.09.2022
 * Time:    15:53
 */
/** @var CMain $APPLICATION */
/** @var string $SECTION */
/** @var string $ITEM */
/** @var string $OTHER */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;
use Library\Tools\Seo;

define("BODY_CLASS", "CASES");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$breadcrumb = Breadcrumb::init();

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/cases_page.css?t=' . time() . '">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/cases_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

$iblock      = CacheSelector::getIblockId('cases', 'content');
$iblockPages = CacheSelector::getIblockId('pages', 'content');

$pageItem = CacheSelector::getIblockElement($iblockPages, 'cases');
if (!$SECTION && !$ITEM) {
    Seo::setPage($iblockPages, $pageItem['ID']);
}

if (!empty($ITEM)) {
    $params = [
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "USE_SHARE" => "N",
        "SHARE_HIDE" => "N",
        "AJAX_MODE" => "Y",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => $iblock,
        "ELEMENT_CODE" => $ITEM,
        "CHECK_DATES" => "N",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "DETAIL_URL" => "",
        "SET_TITLE" => (!$SECTION && !$ITEM ? "N" : "Y"),
        "SET_CANONICAL_URL" => "Y",
        "SET_BROWSER_TITLE" => (!$SECTION && !$ITEM ? "N" : "Y"),
        "SET_META_KEYWORDS" => (!$SECTION && !$ITEM ? "N" : "Y"),
        "SET_META_DESCRIPTION" => (!$SECTION && !$ITEM ? "N" : "Y"),
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
        "PAGER_TITLE" => "????????????????",
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
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => $iblock,
        "NEWS_COUNT" => "2",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "NAME",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => ["ID", "PREVIEW_TEXT", "IBLOCK_SECTION_ID"],
        "PROPERTY_CODE" => ["SUB_TITLE", "COMPANY", "LOGO"],
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => (!$SECTION && !$ITEM ? "N" : "Y"),
        "SET_BROWSER_TITLE" => (!$SECTION && !$ITEM ? "N" : "Y"),
        "SET_META_KEYWORDS" => (!$SECTION && !$ITEM ? "N" : "Y"),
        "SET_META_DESCRIPTION" => (!$SECTION && !$ITEM ? "N" : "Y"),
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
        "PAGER_TITLE" => "??????????????????????",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "cases",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "/local/templates/main/components/mpakfm/news.list/cases/ajax.php?" . ($SECTION != ''? 'section=' . $SECTION : ''),
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "Y",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
    ];
}

?>

<?php if (!empty($ITEM)) { ?>
    <?$APPLICATION->IncludeComponent("bitrix:news.detail","case", $params);?>
<?php } else { ?>
    <?$APPLICATION->IncludeComponent("mpakfm:news.list","cases", $params);?>
<?php } ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
