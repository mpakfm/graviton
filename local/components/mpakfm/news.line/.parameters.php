<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!CModule::IncludeModule("iblock")) {
    return;
}

$arTypesEx = CIBlockParameters::GetIBlockTypes();

$arIBlocks = [];
$db_iblock = CIBlock::GetList(["SORT" => "ASC"], ["SITE_ID" => $_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"] != "-" ? $arCurrentValues["IBLOCK_TYPE"] : "")]);
while ($arRes = $db_iblock->Fetch()) {
    $arIBlocks[$arRes["ID"]] = "[" . $arRes["ID"] . "] " . $arRes["NAME"];
}

$arSorts = [
    "ASC"  => GetMessage("T_IBLOCK_DESC_ASC"),
    "DESC" => GetMessage("T_IBLOCK_DESC_DESC"),
];

$arSortFields = [
    "ID"           => GetMessage("T_IBLOCK_DESC_FID"),
    "NAME"         => GetMessage("T_IBLOCK_DESC_FNAME"),
    "ACTIVE_FROM"  => GetMessage("T_IBLOCK_DESC_FACT"),
    "SORT"         => GetMessage("T_IBLOCK_DESC_FSORT"),
    "TIMESTAMP_X"  => GetMessage("T_IBLOCK_DESC_FTSAMP"),
    "created_date" => GetMessage("T_IBLOCK_DESC_FCDATE"),
];

$arComponentParameters = [
    "GROUPS" => [
    ],
    "PARAMETERS"  => [
        "IBLOCK_TYPE"  => [
            "PARENT"  => "BASE",
            "NAME"    => GetMessage("T_IBLOCK_DESC_LIST_TYPE"),
            "TYPE"    => "LIST",
            "VALUES"  => $arTypesEx,
            "DEFAULT" => "news",
            "REFRESH" => "Y",
        ],
        "IBLOCKS"  => [
            "PARENT"   => "BASE",
            "NAME"     => GetMessage("T_IBLOCK_DESC_LIST_ID"),
            "TYPE"     => "LIST",
            "VALUES"   => $arIBlocks,
            "DEFAULT"  => '',
            "MULTIPLE" => "Y",
        ],
        "SECTIONS"  => [
            "PARENT"   => "BASE",
            "NAME"     => GetMessage("T_IBLOCK_DESC_SECTION_ID"),
            "TYPE"     => "LIST",
            "VALUES"   => $arIBlocks,
            "DEFAULT"  => '',
            "MULTIPLE" => "Y",
        ],
        "TITLE" => [
            "PARENT"  => "BASE",
            "NAME"    => GetMessage("T_IBLOCK_DESC_TITLE"),
            "TYPE"    => "STRING",
            "DEFAULT" => "",
        ],
        "NEWS_COUNT"  => [
            "PARENT"  => "BASE",
            "NAME"    => GetMessage("T_IBLOCK_DESC_LIST_CONT"),
            "TYPE"    => "STRING",
            "DEFAULT" => "20",
        ],
        "FIELD_CODE"             => CIBlockParameters::GetFieldCode(GetMessage("CP_BNL_FIELD_CODE"), "DATA_SOURCE"),
        "FILTER_REQUIRED_FIELDS" => [
            "PARENT"  => "ADDITIONAL_SETTINGS",
            "NAME"    => GetMessage("T_IBLOCK_DESC_FILTER_REQUIRED"),
            "TYPE"    => "LIST",
            "DEFAULT" => [],
        ],
        "IS_ACTIVE_DATE" => [
            "PARENT"  => "ADDITIONAL_SETTINGS",
            "NAME"    => GetMessage("T_IBLOCK_DESC_IS_ACTIVE_DATE"),
            "TYPE"    => "CHECKBOX",
        ],
        "SORT_BY1"   => [
            "PARENT"            => "DATA_SOURCE",
            "NAME"              => GetMessage("T_IBLOCK_DESC_IBORD1"),
            "TYPE"              => "LIST",
            "DEFAULT"           => "ACTIVE_FROM",
            "VALUES"            => $arSortFields,
            "ADDITIONAL_VALUES" => "Y",
        ],
        "SORT_ORDER1"  => [
            "PARENT"            => "DATA_SOURCE",
            "NAME"              => GetMessage("T_IBLOCK_DESC_IBBY1"),
            "TYPE"              => "LIST",
            "DEFAULT"           => "DESC",
            "VALUES"            => $arSorts,
            "ADDITIONAL_VALUES" => "Y",
        ],
        "SORT_BY2"  => [
            "PARENT"            => "DATA_SOURCE",
            "NAME"              => GetMessage("T_IBLOCK_DESC_IBORD2"),
            "TYPE"              => "LIST",
            "DEFAULT"           => "SORT",
            "VALUES"            => $arSortFields,
            "ADDITIONAL_VALUES" => "Y",
        ],
        "SORT_ORDER2"  => [
            "PARENT"            => "DATA_SOURCE",
            "NAME"              => GetMessage("T_IBLOCK_DESC_IBBY2"),
            "TYPE"              => "LIST",
            "DEFAULT"           => "ASC",
            "VALUES"            => $arSorts,
            "ADDITIONAL_VALUES" => "Y",
        ],
        "DETAIL_URL" => CIBlockParameters::GetPathTemplateParam(
            "DETAIL",
            "DETAIL_URL",
            GetMessage("IBLOCK_DETAIL_URL"),
            "",
            "URL_TEMPLATES"
        ),
        "ACTIVE_DATE_FORMAT" => CIBlockParameters::GetDateFormat(GetMessage("T_IBLOCK_DESC_ACTIVE_DATE_FORMAT"), "ADDITIONAL_SETTINGS"),
        "CACHE_TIME"         => ["DEFAULT" => 300],
        "CACHE_GROUPS"       => [
            "PARENT"  => "CACHE_SETTINGS",
            "NAME"    => GetMessage("CP_BNL_CACHE_GROUPS"),
            "TYPE"    => "CHECKBOX",
            "DEFAULT" => "Y",
        ],
    ],
];
