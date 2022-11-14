<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    18.10.2022
 * Time:    23:19
 */
/** @var array $arParams */
/** @var array $arResult */

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&" : "");

$nextUrl = "";
if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
    $nextUrl = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1);
}

print $nextUrl;
