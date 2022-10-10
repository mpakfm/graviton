<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    29.09.2022
 * Time:    23:25
 */
/** @var array $arResult */

$arResult['MENU'] = [];

$i     = -1;
$depth = null;
$prev  = null;
foreach ($arResult['SECTIONS'] as $section) {
    $i++;
    if (!$depth) {
        $depth = $section['DEPTH_LEVEL'];
    }

    $item = [
        'ID'    => $section['ID'],
        'NAME'  => $section['NAME'],
        'LINK'  => $section['UF_LINK'],
        'CHILD' => []
    ];
    if ($section['DEPTH_LEVEL'] == $depth) {
        $arResult['MENU'][$i] = $item;
        $prev = $i;
        continue;
    }
    if ($section['DEPTH_LEVEL'] > $depth) {
        $arResult['MENU'][$prev]['CHILD'][$i] = $item;
    }
}

if (!empty($arResult['ELEMENTS'][$arResult['SECTION']['ID']])) {
    foreach ($arResult['ELEMENTS'][$arResult['SECTION']['ID']] as $element) {
        $i++;
        $item = [
            'NAME'  => $element['NAME'],
            'LINK'  => $element['PROPERTY_LINK_VALUE'],
            'BLANK' => $element['PROPERTY_BLANK_VALUE'],
            'CHILD' => null,
        ];
        $arResult['MENU'][$i] = $item;
    }
}

foreach ($arResult['MENU'] as $key => $firstLevel) {
    if (array_key_exists($firstLevel['ID'], $arResult['ELEMENTS'])) {
        foreach ($arResult['ELEMENTS'][$firstLevel['ID']] as $element) {
            $item = [
                'NAME'   => $element['NAME'],
                'LINK'   => $element['PROPERTY_LINK_VALUE'],
                'BLANK'  => $element['PROPERTY_BLANK_VALUE'],
                'IMG'    => null,
                'CHILD'  => null,
            ];
            if ($element['PREVIEW_PICTURE']) {
                $img         = CFile::GetByID($element['PREVIEW_PICTURE'])->Fetch();
                $item['IMG'] = CFile::GetFileSRC($img);
            }
            $arResult['MENU'][$key]['CHILD'][] = $item;
        }
    }
    if (!empty($firstLevel['CHILD'])) {
        foreach ($firstLevel['CHILD'] as $key2 => $secondLevel) {
            if (array_key_exists($secondLevel['ID'], $arResult['ELEMENTS'])) {
                foreach ($arResult['ELEMENTS'][$secondLevel['ID']] as $element) {
                    $item = [
                        'NAME'   => $element['NAME'],
                        'LINK'   => $element['PROPERTY_LINK_VALUE'],
                        'BLANK'  => $element['PROPERTY_BLANK_VALUE'],
                        'IMG'    => null,
                        'CHILD'  => null,
                    ];
                    if ($element['PREVIEW_PICTURE']) {
                        $img         = CFile::GetByID($element['PREVIEW_PICTURE'])->Fetch();
                        $item['IMG'] = CFile::GetFileSRC($img);
                    }
                    $arResult['MENU'][$key]['CHILD'][$key2]['CHILD'][] = $item;
                }
            }
        }
    }
}
