<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    05.11.2022
 * Time:    20:48
 */
/** @var array $arParams */
/** @var array $arResult */

$arResult['FORM_HEADER'] = str_replace('form', 'form class="s-about-contacts__form form"', $arResult['FORM_HEADER']);

$sql = "SELECT * FROM b_form_field WHERE FORM_ID = '{$arParams['WEB_FORM_ID']}'";
$con = \Bitrix\Main\Application::getConnection();

$stmt   = $con->query($sql);
$items  = [];
$ansIds = [];
while ($row = $stmt->fetch()) {
    $ansIds[]          = $row['ID'];
    $items[$row['ID']] = $row;
}
$sql     = "SELECT * FROM  b_form_answer WHERE FIELD_ID IN (" . implode(', ', $ansIds) . ")";
$stmt    = $con->query($sql);
$answers = [];
while ($row = $stmt->fetch()) {
    $items[$row['FIELD_ID']]['ANSWERS'][$row['ID']] = $row;
}

foreach ($items as &$question) {
    $question['IS_ERROR'] = false;
    if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($question['SID'], $arResult['FORM_ERRORS'])) {
        $question['IS_ERROR']      = true;
        $question['ERROR_MESSAGE'] = $arResult['FORM_ERRORS'][$question['SID']];
    }

}
$arResult['ITEMS'] = $items;
