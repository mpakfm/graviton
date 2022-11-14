<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    18.09.2022
 * Time:    20:16
 */
/** @var array $arResult */

$blockNewsId   = \Library\Tools\CacheSelector::getIblockId('news', 'content');
$blockEventsId = \Library\Tools\CacheSelector::getIblockId('events', 'content');
$arResult['NEWS']   = [];
$arResult['EVENTS'] = [];

foreach ($arResult['ITEMS'] as &$item) {
    if (strpos($item['ACTIVE_FROM'], ' ') !== false) {
        $dt = date_create_from_format('d.m.Y H:i:s', $item['ACTIVE_FROM']);
    } else {
        $dt = date_create_from_format('d.m.Y', $item['ACTIVE_FROM']);
    }

    if ($item['IBLOCK_ID'] == $blockNewsId) {
        if (empty($item['PROPERTY_TOP_TITLE_VALUE'])) {
            $item['PROPERTY_TOP_TITLE_VALUE'] = $item['NAME'];
        }
        if ($dt && empty($item['PROPERTY_TOP_DATE_VALUE'])) {
            $item['PROPERTY_TOP_DATE_VALUE'] = FormatDate("d F", $dt->format('U'));
        }
        $arResult['NEWS'][] = $item;
    }
    if ($item['IBLOCK_ID'] == $blockEventsId) {
        if (empty($item['PROPERTY_TOP_PLACE_VALUE'])) {

        }
        if (empty($item['PROPERTY_TOP_TITLE_VALUE'])) {
            $item['PROPERTY_TOP_TITLE_VALUE'] = $item['NAME'];
        }
        if ($dt && empty($item['PROPERTY_TOP_DATE_VALUE'])) {
            $item['PROPERTY_TOP_DATE_VALUE'] = FormatDate("d F", $dt->format('U'));
        }
        $arResult['EVENTS'][] = $item;
    }
}
