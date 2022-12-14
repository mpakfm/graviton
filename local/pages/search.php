<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    24.09.2022
 * Time:    20:56
 */
/** @var CMain $APPLICATION */
/** @var string $TYPE */
/** @var string $CODE */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;

define("BODY_CLASS", "SEARCH");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$arrFilter = ["no"];

if ($TYPE != '') {
    $iblockId = \Library\Tools\CacheSelector::getIblockId($CODE, $TYPE);
    $arrFilter = ["iblock_" . $TYPE];
}

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/searching_results.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/searching_results.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

$APPLICATION->SetTitle("Graviton - Поиск");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

$searchParams = [
    "TAGS_SORT"              => "NAME",
    "TAGS_PAGE_ELEMENTS"     => "150",
    "TAGS_PERIOD"            => "30",
    "TAGS_URL_SEARCH"        => "/search/",
    "TAGS_INHERIT"           => "Y",
    "FONT_MAX"               => "50",
    "FONT_MIN"               => "10",
    "COLOR_NEW"              => "000000",
    "COLOR_OLD"              => "C8C8C8",
    "PERIOD_NEW_TAGS"        => "",
    "SHOW_CHAIN"             => "Y",
    "COLOR_TYPE"             => "Y",
    "WIDTH"                  => "100%",
    "USE_SUGGEST"            => "N",
    "SHOW_RATING"            => "Y",
    "PATH_TO_USER_PROFILE"   => "",
    "AJAX_MODE"              => "N",
    "RESTART"                => "Y",
    "NO_WORD_LOGIC"          => "N",
    "USE_LANGUAGE_GUESS"     => "Y",
    "CHECK_DATES"            => "N",
    "USE_TITLE_RANK"         => "Y",
    "DEFAULT_SORT"           => "rank",
    "FILTER_NAME"            => "",
    "arrFILTER"              => $arrFilter,
    "SHOW_WHERE"             => "N",
    "arrWHERE"               => [],
    "SHOW_WHEN"              => "N",
    "PAGE_RESULT_COUNT"      => "5",
    "CACHE_TYPE"             => "N",
    "CACHE_TIME"             => "3600",
    "DISPLAY_TOP_PAGER"      => "N",
    "DISPLAY_BOTTOM_PAGER"   => "Y",
    "PAGER_TITLE"            => "Результаты поиска",
    "PAGER_SHOW_ALWAYS"      => "Y",
    "PAGER_TEMPLATE"         => "search",
    "AJAX_OPTION_SHADOW"     => "Y",
    "AJAX_OPTION_JUMP"       => "N",
    "AJAX_OPTION_STYLE"      => "Y",
    "AJAX_OPTION_HISTORY"    => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
];
$searchParams['TYPE'] = null;
$searchParams['CODE'] = null;

if ($TYPE != '') {
    $searchParams['arrFILTER_iblock_' . $TYPE] = $iblockId;
    $searchParams['TYPE'] = $TYPE;
    $searchParams['CODE'] = $CODE;
}
?>

<main class="main">
    <?$APPLICATION->IncludeComponent("mpakfm:search.page", "filters", $searchParams);?>
</main>

<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
