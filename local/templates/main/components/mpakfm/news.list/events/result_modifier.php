<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    14.11.2022
 * Time:    0:44
 */
/** @var array $arParams */
/** @var array $arrFilter */
/** @var array $arResult */

$arResult['CITIES'] = \Library\Tools\Events::getCities();

$arrFilter = $GLOBALS[$arParams['FILTER_NAME']];

if (array_key_exists('FIRST_BIG', $arrFilter) && $arrFilter['FIRST_BIG']) {
    $arResult['FIRST'] = array_shift($arResult['ITEMS']);
    if (empty($arResult['FIRST']['DISPLAY_PROPERTIES']['TOP_PLACE']['DISPLAY_VALUE'])) {
        if (is_array($arResult['FIRST']['DISPLAY_PROPERTIES']['CITY']['DISPLAY_VALUE'])) {
            $cities = [];
            foreach ($arResult['FIRST']['DISPLAY_PROPERTIES']['CITY']['DISPLAY_VALUE'] as $item) {
                $cities[] = strip_tags($item);
            }
            $arResult['FIRST']['DISPLAY_PROPERTIES']['TOP_PLACE']['DISPLAY_VALUE'] = implode(', ', $cities);
        } else {
            $arResult['FIRST']['DISPLAY_PROPERTIES']['TOP_PLACE']['DISPLAY_VALUE'] = strip_tags($arResult['FIRST']['DISPLAY_PROPERTIES']['CITY']['DISPLAY_VALUE']);
        }
    }
    if (empty($arResult['FIRST']['DISPLAY_PROPERTIES']['TOP_DATE']['DISPLAY_VALUE'])) {
        if (strpos($arResult['FIRST']["ACTIVE_FROM"], ' ') !== false) {
            $dt = date_create_from_format('d.m.Y H:i:s', $arResult['FIRST']["ACTIVE_FROM"]);
        } else {
            $dt = date_create_from_format('d.m.Y', $arResult['FIRST']["ACTIVE_FROM"]);
        }
        $arResult['FIRST']['DISPLAY_PROPERTIES']['TOP_DATE']['DISPLAY_VALUE'] = FormatDate("d F", $dt->format('U'));
    }
}
