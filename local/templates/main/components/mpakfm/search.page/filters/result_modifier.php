<?php
/**
 * Created by PhpStorm
 * Project: itnmp
 * User:    mpak
 * Date:    13.08.2022
 * Time:    21:02
 */
/** @var array $arParams */
/** @var array $arResult */

use Library\Tools\CacheSelector;

$iblocksKeys = [
    'product' => 'catalog',
    'news'    => 'content',
    'events'  => 'content',
    'docs'    => 'content',
    'video'   => 'content',
    'drivers' => 'files',
    'about'   => 'files',
];
$iblocks = [];
foreach ($iblocksKeys as $code => $type) {
    $item = CacheSelector::getIblock($code, $type);
    if (!$item) {
        continue;
    }
    $iblocks[$code]['cnt']    = false;
    $iblocks[$code]['iblock'] = $item;
    $iblocks[$code]['link']   = '/search/' . $type . '/' . $code . '?q=' . $arResult["REQUEST"]["QUERY"];
    if ($arParams['TYPE'] == $type && $arParams['CODE'] == $code) {
        $iblocks[$code]['current'] = true;
        $iblocks[$code]['cnt']     = true;
    } else {
        $obSearch = new CSearch();
        $obSearch->Search(array(
            'QUERY' => $arResult["REQUEST"]["QUERY"],
            'SITE_ID' => LANG,
            'MODULE_ID' => 'iblock',
            'PARAM1' => $type,
            'PARAM2' => $item['ID'],
        ));
        $iblocks[$code]['cnt'] = $obSearch->SelectedRowsCount();
    }
}
$arResult['FILTER'] = $iblocks;

$con = \Bitrix\Main\Application::getConnection();
$sql = "SELECT PHRASE FROM b_search_phrase ORDER BY TIMESTAMP_X DESC LIMIT 1, 4";
$arResult['LAST_QUERY'] = $con->query($sql)->fetchAll();

if (empty($arResult['SEARCH'])) {

    $sql = "SELECT COUNT(ID) as CNT, PHRASE FROM b_search_phrase GROUP BY PHRASE ORDER BY CNT DESC LIMIT 10";
    $arResult['TOP'] = $con->query($sql)->fetchAll();
}
