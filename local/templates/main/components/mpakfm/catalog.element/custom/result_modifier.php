<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    06.10.2022
 * Time:    15:57
 */
/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

use Library\Tools\CacheSelector;

$arResult['IS_T'] = false;

$arResult['FILES']        = [];
$arResult['T_PROPERTIES'] = [];

$arResult['PARENT'] = CIBlockSection::GetList([], ['ID' => $arResult['SECTION']['PATH'][0]['ID'], 'IBLOCK_ID' => $arResult['SECTION']['PATH'][0]['IBLOCK_ID']], false, ['UF_ADVERT', 'UF_LOGO'])->Fetch();

foreach ($arResult['PROPERTIES'] as $property) {
    if (strpos($property['CODE'], 'T_') === 0 && !empty($property['VALUE'])) {
        $property['NAME'] = str_replace(['X.', 'Х.'], '', $property['~NAME']);
        $arResult['T_PROPERTIES'][] = $property;
        if (!$arResult['IS_T']) {
            $arResult['IS_T'] = true;
        }
    }
}

$ports = CacheSelector::getHlData('Ports');
$arResult['PORTS'] = [];
foreach ($ports as $port) {
    $arResult['PORTS'][$port['UF_XML_ID']] = $port;
}
$filesIds = [];
if ((int) $arResult['PROPERTIES']['DETAIL_IMG_CENTER']['VALUE']) {
    $filesIds[] = (int) $arResult['PROPERTIES']['DETAIL_IMG_CENTER']['VALUE'];
}
if ((int) $arResult['PROPERTIES']['DETAIL_IMG_BOTTOM']['VALUE']) {
    $filesIds[] = (int) $arResult['PROPERTIES']['DETAIL_IMG_BOTTOM']['VALUE'];
}

$arResult['IS_FILES'] = false;
if (!empty($arResult['PROPERTIES']['M_DOCS']['VALUE']) || !empty($arResult['PROPERTIES']['M_SERT']['VALUE']) || !empty($arResult['PROPERTIES']['M_DRIVERS']['VALUE'])) {
    $arResult['IS_FILES'] = true;
}
foreach ($arResult['PROPERTIES']['M_DOCS']['VALUE'] as $item) {
    $filesIds[] = $item;
}
foreach ($arResult['PROPERTIES']['M_SERT']['VALUE'] as $item) {
    $filesIds[] = $item;
}
foreach ($arResult['PROPERTIES']['M_DRIVERS']['VALUE'] as $item) {
    $filesIds[] = $item;
}

$stmtFiles = CFile::GetList([], ['@ID' => $filesIds]);
while ($file = $stmtFiles->Fetch()) {
    $src  = CFile::GetFileSRC($file);
    $size = round($file['FILE_SIZE'] / 1024 / 1024, 2);

    $file['SRC']     = $src;
    $file['MB_SIZE'] = $size;

    $arResult['FILES'][$file['ID']] = $file;
}
