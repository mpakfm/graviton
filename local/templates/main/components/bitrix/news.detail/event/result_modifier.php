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
if ($arResult['DISPLAY_PROPERTIES']['TOP_TITLE']['DISPLAY_VALUE'] == '') {
    $arResult['DISPLAY_PROPERTIES']['TOP_TITLE']['DISPLAY_VALUE'] = $arResult['NAME'];
}
if (!array_key_exists('TOP_PLACE', $arResult['DISPLAY_PROPERTIES'])) {
    if (is_array($arResult['DISPLAY_PROPERTIES']['CITY']['DISPLAY_VALUE'])) {
        $cities = [];
        foreach ($arResult['DISPLAY_PROPERTIES']['CITY']['DISPLAY_VALUE'] as $item) {
            $cities[] = strip_tags($item);
        }
        $arResult['DISPLAY_PROPERTIES']['TOP_PLACE']['DISPLAY_VALUE'] = implode(', ', $cities);
    } else {
        $arResult['DISPLAY_PROPERTIES']['TOP_PLACE']['DISPLAY_VALUE'] = strip_tags($arResult['DISPLAY_PROPERTIES']['CITY']['DISPLAY_VALUE']);
    }
}
if (!array_key_exists('TOP_DATE', $arResult['DISPLAY_PROPERTIES'])) {
    if (strpos($arResult["ACTIVE_FROM"], ' ') !== false) {
        $dt = date_create_from_format('d.m.Y H:i:s', $arResult["ACTIVE_FROM"]);
    } else {
        $dt = date_create_from_format('d.m.Y', $arResult["ACTIVE_FROM"]);
    }
    $arResult['DISPLAY_PROPERTIES']['TOP_DATE']['DISPLAY_VALUE'] = FormatDate("j F", $dt->format('U'));
    if ($arResult["ACTIVE_TO"] != '') {
        if (strpos($arResult["ACTIVE_TO"], ' ') !== false) {
            $dt2 = date_create_from_format('d.m.Y H:i:s', $arResult["ACTIVE_TO"]);
        } else {
            $dt2 = date_create_from_format('d.m.Y', $arResult["ACTIVE_TO"]);
        }
        if ($dt->format('m.Y') == $dt2->format('m.Y')) {
            $arResult['DISPLAY_PROPERTIES']['TOP_DATE']['DISPLAY_VALUE'] = FormatDate("j", $dt->format('U')) . ' - ' . FormatDate("d F", $dt2->format('U'));
        } else {
            $arResult['DISPLAY_PROPERTIES']['TOP_DATE']['DISPLAY_VALUE'] .= ' - ' . FormatDate("j F", $dt2->format('U'));
        }
    }
}
