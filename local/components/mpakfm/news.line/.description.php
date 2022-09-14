<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentDescription = [
    "NAME"        => GetMessage("T_IBLOCK_DESC_LINE"),
    "DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LINE_DESC"),
    "ICON"        => "/images/news_line.gif",
    "SORT"        => 10,
    "CACHE_PATH"  => "Y",
    "PATH"        => [
        "ID"    => "content",
        "CHILD" => [
            "ID"   => "news",
            "NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
            "SORT" => 10,
        ],
    ],
];
