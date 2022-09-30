<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

use Bitrix\Iblock,
    Bitrix\Main,
    Bitrix\Main\Loader;
use Library\Tools\CacheSelector;

if (!isset($arParams["CACHE_TIME"])) {
    $arParams["CACHE_TIME"] = 300;
}

$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
if ($arParams["IBLOCK_TYPE"] == '') {
    $arParams["IBLOCK_TYPE"] = "news";
}
if ($arParams["IBLOCK_TYPE"] == "-") {
    $arParams["IBLOCK_TYPE"] = "";
}

if (!is_array($arParams["IBLOCKS"])) {
    $arParams["IBLOCKS"] = [$arParams["IBLOCKS"]];
}
foreach ($arParams["IBLOCKS"] as $k => $v) {
    if (is_string($v)) {
        $iblockId = CacheSelector::getIblockId($v, 'content');
        if ($iblockId) {
            $arParams["IBLOCKS"][$k] = $iblockId;
            continue;
        }
    }
    if (!$v) {
        unset($arParams["IBLOCKS"][$k]);
    }
}

if (!is_array($arParams["FIELD_CODE"])) {
    $arParams["FIELD_CODE"] = [];
}
foreach ($arParams["FIELD_CODE"] as $key => $val) {
    if (!$val) {
        unset($arParams["FIELD_CODE"][$key]);
    }
}

if (array_key_exists('IS_ACTIVE_DATE', $arParams)) {
    $arParams['IS_ACTIVE_DATE'] = (bool) $arParams['IS_ACTIVE_DATE'];
} else {
    $arParams['IS_ACTIVE_DATE'] = true;
}

$arParams["SORT_BY1"] = trim($arParams["SORT_BY1"]);
if ($arParams["SORT_BY1"] == '') {
    $arParams["SORT_BY1"] = "ACTIVE_FROM";
}
if (!preg_match('/^(asc|desc|nulls)(,asc|,desc|,nulls){0,1}$/i', $arParams["SORT_ORDER1"])) {
    $arParams["SORT_ORDER1"] = "DESC";
}

if ($arParams["SORT_BY2"] == '') {
    $arParams["SORT_BY2"] = "SORT";
}
if (!preg_match('/^(asc|desc|nulls)(,asc|,desc|,nulls){0,1}$/i', $arParams["SORT_ORDER2"])) {
    $arParams["SORT_ORDER2"] = "ASC";
}

$arParams["NEWS_COUNT"] = intval($arParams["NEWS_COUNT"]);
if ($arParams["NEWS_COUNT"] <= 0) {
    $arParams["NEWS_COUNT"] = 20;
}

$arParams["DETAIL_URL"] = trim($arParams["DETAIL_URL"]);

$arParams["ACTIVE_DATE_FORMAT"] = trim($arParams["ACTIVE_DATE_FORMAT"]);
if ($arParams["ACTIVE_DATE_FORMAT"] == '') {
    $arParams["ACTIVE_DATE_FORMAT"] = $DB->DateFormatToPHP(CSite::GetDateFormat("SHORT"));
}

if ($this->startResultCache(false, ($arParams["CACHE_GROUPS"] === "N" ? false : $USER->GetGroups()))) {
    if (!Loader::includeModule("iblock")) {
        $this->abortResultCache();
        ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
        return;
    }
    $arSelect = array_merge($arParams["FIELD_CODE"], [
        "ID",
        "IBLOCK_ID",
        "ACTIVE_FROM",
        "DETAIL_PAGE_URL",
        "NAME",
    ]);
    $arResult = [
        "ITEMS" => [],
    ];
    foreach ($arParams["IBLOCKS"] as $iblockCode) {
        $ids      = null;
        $arFilter = [
            "IBLOCK_TYPE"       => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID"         => [$iblockCode],
            "IBLOCK_LID"        => SITE_ID,
            "ACTIVE"            => "Y",
            "CHECK_PERMISSIONS" => "Y",
        ];
        if ($arParams['IS_ACTIVE_DATE']) {
            $arFilter['ACTIVE_DATE'] = 'Y';
        }
        if (array_key_exists("FILTER_IDS", $arParams) && !empty($arParams['FILTER_IDS'])) {
            if (!$ids) {
                $ids = [];
            }
            foreach ($arParams['FILTER_IDS'] as $id) {
                $id = (int) $id;
                if ($id && !in_array($id, $ids)) {
                    $ids[] = $id;
                }
            }
            $arParams['FILTER_IDS'] = $ids;
        }

        if (array_key_exists("FILTER_REQUIRED_FIELDS", $arParams) && !empty($arParams['FILTER_REQUIRED_FIELDS'])) {
            foreach ($arParams['FILTER_REQUIRED_FIELDS'] as $field) {
                $arFilter['!' . $field] = false;
            }
        }
        if (array_key_exists("FILTER_REQUIRED_VALUES", $arParams) && !empty($arParams['FILTER_REQUIRED_VALUES'])) {
            foreach ($arParams['FILTER_REQUIRED_VALUES'] as $field => $flt) {
                if (!is_array($flt) || empty($flt)) {
                    continue;
                }
                $arFilter[$flt['ref'] . $field] = $flt['value'];
            }
        }
        if ($ids) {
            $arFilter['ID'] = $ids;
        }
        $arOrder = [
            $arParams["SORT_BY1"] => $arParams["SORT_ORDER1"],
            $arParams["SORT_BY2"] => $arParams["SORT_ORDER2"],
        ];
        if (!array_key_exists("ID", $arOrder)) {
            $arOrder["ID"] = "DESC";
        }

        $rsItems = CIBlockElement::GetList($arOrder, $arFilter, false, ["nTopCount" => $arParams["NEWS_COUNT"]], $arSelect);
        $rsItems->SetUrlTemplates($arParams["DETAIL_URL"]);
        while ($arItem = $rsItems->GetNext()) {
            $arButtons = CIBlock::GetPanelButtons(
                $arItem["IBLOCK_ID"],
                $arItem["ID"],
                0,
                ["SECTION_BUTTONS" => false, "SESSID" => false]
            );
            $arItem["EDIT_LINK"]   = $arButtons["edit"]["edit_element"]["ACTION_URL"];
            $arItem["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

            if ($arItem["ACTIVE_FROM"] <> '') {
                $arItem["DISPLAY_ACTIVE_FROM"] = CIBlockFormatProperties::DateFormat($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp($arItem["ACTIVE_FROM"], CSite::GetDateFormat()));
            } else {
                $arItem["DISPLAY_ACTIVE_FROM"] = "";
            }

            Iblock\InheritedProperty\ElementValues::queue($arItem["IBLOCK_ID"], $arItem["ID"]);

            $arResult["ITEMS"][]             = $arItem;
            $arResult["LAST_ITEM_IBLOCK_ID"] = $arItem["IBLOCK_ID"];
        }
    }
    foreach ($arResult["ITEMS"] as &$arItem) {
        $ipropValues                = new Iblock\InheritedProperty\ElementValues($arItem["IBLOCK_ID"], $arItem["ID"]);
        $arItem["IPROPERTY_VALUES"] = $ipropValues->getValues();
        Iblock\Component\Tools::getFieldImageData(
            $arItem,
            ['PREVIEW_PICTURE', 'DETAIL_PICTURE'],
            Iblock\Component\Tools::IPROPERTY_ENTITY_ELEMENT,
            'IPROPERTY_VALUES'
        );
    }
    // Сортировка по FILTER_IDS
    if (array_key_exists("FILTER_IDS", $arParams) && !empty($arParams['FILTER_IDS'])) {
        $originItems       = $arResult["ITEMS"];
        $arResult["ITEMS"] = [];
        foreach ($arParams['FILTER_IDS'] as $id) {
            foreach ($originItems as $item) {
                if ($item['ID'] == $id) {
                    $arResult["ITEMS"][] = $item;
                }
            }
        }
        unset($originItems);
    }
    unset($arItem);

    $this->setResultCacheKeys([
        "LAST_ITEM_IBLOCK_ID",
    ]);
    $this->includeComponentTemplate();
}

if (
    $arResult["LAST_ITEM_IBLOCK_ID"] > 0
    && $USER->IsAuthorized()
    && $APPLICATION->GetShowIncludeAreas()
    && CModule::IncludeModule("iblock")
) {
    $arButtons = CIBlock::GetPanelButtons($arResult["LAST_ITEM_IBLOCK_ID"], 0, 0, ["SECTION_BUTTONS" => false]);
    $this->addIncludeAreaIcons(CIBlock::GetComponentMenu($APPLICATION->GetPublicShowMode(), $arButtons));
}
