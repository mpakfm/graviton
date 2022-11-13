<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    14.11.2022
 * Time:    0:44
 */
/** @var array $arParams */
/** @var array $arResult */
$stmt = CIBlockSection::GetList(['sort' => 'asc'], ['IBLOCK_ID' => $arParams['IBLOCK_ID']], false, ['ID', 'CODE', 'NAME', 'IBLOCK_SECTION_ID']);
$arResult['SECTIONS'] = [];
while($section = $stmt->Fetch())
{
    $arResult['SECTIONS'][] = $section;
}
