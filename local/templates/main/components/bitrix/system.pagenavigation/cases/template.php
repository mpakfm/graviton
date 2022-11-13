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
<div class="s-cases-cards__items-more">
    <a class="s-cases-card__link cases__btn-more" data-url="<?=$nextUrl;?>" <?php if (!$nextUrl) { ?>style="display: none;" <?php } ?>>
        <div class="s-cases-card__link-text">Больше кейсов</div>
        <div class="s-cases-card__link-arrow"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 12H19L13.6486 17" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19 6H1L6.35135 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </a>
</div>
