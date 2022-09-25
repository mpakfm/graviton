<?php
/**
 * Created by PhpStorm
 * Project: itnmp
 * User:    mpak
 * Date:    13.08.2022
 * Time:    21:02
 */
/** @var array $arResult */

use Library\Tools\CacheSelector;

$iblockEvent = CacheSelector::getIblockId('events', 'content');
$iblockNews  = CacheSelector::getIblockId('news', 'content');
$iblockDocs  = CacheSelector::getIblockId('docs', 'content');
$iblockVideo = CacheSelector::getIblockId('video', 'content');

$propsEvent = ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'PROPERTY_DATE_START', 'PROPERTY_DATE_TOP', 'PROPERTY_PLACE_TOP'];
$propsNews  = ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'PROPERTY_DATE_PUB', 'PROPERTY_DATE_TOP', 'PROPERTY_IS_PUB'];
$propsDocs  = ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'PROPERTY_DATE_PUB', 'PROPERTY_DATE_TOP'];
$propsVideo = ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'PROPERTY_DATE_PUB', 'PROPERTY_DATE_TOP', 'PROPERTY_IS_PUB', 'PROPERTY_VIDEO'];

$elIblockIds = [];

$items  = [];
$imgIds = [];

foreach ($arResult['NAV_RESULT']->arResult as $item) {
    if (!empty($item['URL'])) {
        $url = explode('&', $item['URL']);
        foreach ($url as $field) {
            if (strpos($field, 'IBLOCK_ID') !== false) {
                $val                    = explode('=', $field);
                $elIblockIds[$val[1]][] = $item['ITEM_ID'];
                break;
            }
        }
    }
}

foreach ($elIblockIds as $iblockId => $elements) {
    if ($iblockId == $iblockEvent) {
        $stmt = CIBlockElement::GetList([], ['ID' => $elements, 'IBLOCK_ID' => $iblockEvent], false, null, $propsEvent);
        while ($item = $stmt->Fetch()) {
            if (strpos($item['PROPERTY_DATE_START_VALUE'], ' ') !== false) {
                $dt = date_create_from_format('d.m.Y H:i:s', $item['PROPERTY_DATE_START_VALUE']);
            } else {
                $dt = date_create_from_format('d.m.Y', $item['PROPERTY_DATE_START_VALUE']);
            }
            if ($dt) {
                if (empty($item['PROPERTY_DATE_TOP_VALUE'])) {
                    $item['DATE'] = FormatDate("j F", $dt->format('U'));
                } else {
                    $item['DATE'] = $item['PROPERTY_DATE_TOP_VALUE'];
                }
            }
            if ($item['PREVIEW_PICTURE']) {
                $imgIds[] = $item['PREVIEW_PICTURE'];
            }
            $items[$item['ID']] = $item;
        }
    } elseif ($iblockId == $iblockNews) {
        $stmt = CIBlockElement::GetList([], ['ID' => $elements, 'IBLOCK_ID' => $iblockNews], false, null, $propsNews);
        while ($item = $stmt->Fetch()) {
            if (strpos($item['PROPERTY_DATE_PUB_VALUE'], ' ') !== false) {
                $dt = date_create_from_format('d.m.Y H:i:s', $item['PROPERTY_DATE_PUB_VALUE']);
            } else {
                $dt = date_create_from_format('d.m.Y', $item['PROPERTY_DATE_PUB_VALUE']);
            }
            if ($dt) {
                if (empty($item['PROPERTY_DATE_TOP_VALUE'])) {
                    $item['DATE'] = FormatDate("j F", $dt->format('U'));
                } else {
                    $item['DATE'] = $item['PROPERTY_DATE_TOP_VALUE'];
                }
            }
            if ($item['PREVIEW_PICTURE']) {
                $imgIds[] = $item['PREVIEW_PICTURE'];
            }
            $items[$item['ID']] = $item;
        }
    } elseif ($iblockId == $iblockDocs) {
        $stmt = CIBlockElement::GetList([], ['ID' => $elements, 'IBLOCK_ID' => $iblockDocs], false, null, $propsDocs);
        while ($item = $stmt->Fetch()) {
            if (strpos($item['PROPERTY_DATE_PUB_VALUE'], ' ') !== false) {
                $dt = date_create_from_format('d.m.Y H:i:s', $item['PROPERTY_DATE_PUB_VALUE']);
            } else {
                $dt = date_create_from_format('d.m.Y', $item['PROPERTY_DATE_PUB_VALUE']);
            }
            if ($dt) {
                if (empty($item['PROPERTY_DATE_TOP_VALUE'])) {
                    $item['DATE'] = FormatDate("j F", $dt->format('U'));
                } else {
                    $item['DATE'] = $item['PROPERTY_DATE_TOP_VALUE'];
                }
            }
            if ($item['PREVIEW_PICTURE']) {
                $imgIds[] = $item['PREVIEW_PICTURE'];
            }
            $items[$item['ID']] = $item;
        }
    } elseif ($iblockId == $iblockVideo) {
        $stmt = CIBlockElement::GetList([], ['ID' => $elements, 'IBLOCK_ID' => $iblockVideo], false, null, $propsVideo);
        while ($item = $stmt->Fetch()) {
            if (strpos($item['PROPERTY_DATE_PUB_VALUE'], ' ') !== false) {
                $dt = date_create_from_format('d.m.Y H:i:s', $item['PROPERTY_DATE_PUB_VALUE']);
            } else {
                $dt = date_create_from_format('d.m.Y', $item['PROPERTY_DATE_PUB_VALUE']);
            }
            if ($dt) {
                if (empty($item['PROPERTY_DATE_TOP_VALUE'])) {
                    $item['DATE'] = FormatDate("j F", $dt->format('U'));
                } else {
                    $item['DATE'] = $item['PROPERTY_DATE_TOP_VALUE'];
                }
            }
            if ($item['PREVIEW_PICTURE']) {
                $imgIds[] = $item['PREVIEW_PICTURE'];
            }
            $items[$item['ID']] = $item;
        }
    }
}

$stmt   = CFile::GetList([], ['@ID' => $imgIds]);
$images = [];
while ($item = $stmt->Fetch()) {
    $images[$item['ID']] = '/upload/' . $item['SUBDIR'] . '/' . urlencode($item['FILE_NAME']);
}
foreach ($items as $id => &$item) {
    foreach ($images as $key => $src) {
        if ($key == $item['PREVIEW_PICTURE']) {
            $item['PREVIEW_PICTURE'] = $src;
            break;
        }
    }
}

foreach ($arResult['SEARCH'] as &$item) {
    if (!empty($item['TAGS'])) {
        $item['TAGS'] = array_slice($item['TAGS'], 0, 2);
    }
    foreach ($items as $el) {
        if ($el['ID'] == $item['ITEM_ID']) {
            $item['PROPERTIES'] = $el;
        }
    }
}
