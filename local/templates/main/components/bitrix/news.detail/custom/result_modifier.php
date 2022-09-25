<?php
/**
 * Created by PhpStorm
 * Project: itnmp
 * User:    mpak
 * Date:    25.07.2022
 * Time:    19:05
 */
/** @var array $arParams */
/** @var array $arResult */

if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]) {
    if (strpos($arResult["DISPLAY_ACTIVE_FROM"], ' ') !== false) {
        $dt = date_create_from_format('d.m.Y H:i:s', $arResult["DISPLAY_ACTIVE_FROM"]);
    } else {
        $dt = date_create_from_format('d.m.Y', $arResult["DISPLAY_ACTIVE_FROM"]);
    }
    $arResult['DISPLAY_ACTIVE_FROM_DAY'] = FormatDate("d", $dt->format('U'));
    $arResult['DISPLAY_ACTIVE_FROM_MONTH'] = FormatDate("F", $dt->format('U'));
}
