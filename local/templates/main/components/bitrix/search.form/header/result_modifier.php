<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    07.10.2022
 * Time:    20:22
 */

$con  = \Bitrix\Main\Application::getConnection();
$sql  = "SELECT PHRASE, COUNT(ID) as CNT
        FROM b_search_phrase
        GROUP BY PHRASE
        ORDER BY CNT DESC
        LIMIT 5";
$stmt = $con->query($sql);
$res = [];
while ($item = $stmt->fetch()) {
    $res[] = $item['PHRASE'];
}
$arResult['SUGGEST'] = $res;
