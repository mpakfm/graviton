<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    18.10.2022
 * Time:    23:19
 */
/** @var array $arParams */
/** @var array $arResult */

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&" : "");

$nextUrl = null;
if ($arResult["NavPageNomer"] > 1) {
    $nextUrl = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"]-1);
} elseif ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
    $nextUrl = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"]+1);
}

?>
<div class="news__btn">
    <button class="news__btn-more" type="button" data-url="<?=$nextUrl;?>" <?php if (!$nextUrl) { ?>style="display: none;" <?php } ?>>Больше новостей</button>
</div>
