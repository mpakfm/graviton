<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    07.10.2022
 * Time:    22:46
 */
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if(!$arResult["NavShowAlways"])
{
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

?>

<div class="news-detail__more" style="margin-top: 50px;">
    Поиск, результаты:
    <?=$arResult["NavFirstRecordShow"]?> <?=GetMessage("nav_to")?> <?=$arResult["NavLastRecordShow"]?> <?=GetMessage("nav_of")?> <?=$arResult["NavRecordCount"]?><br /></font>

    <div class="news-detail__more--btn">

        <?if ($arResult["NavPageNomer"] > 1):?>

            <?if($arResult["bSavePage"]):?>
                <a class="news-detail__btn--prev" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><svg class="ico ico-color-arrow-circle"><use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use></svg></a>
            <?else:?>
                <?if ($arResult["NavPageNomer"] > 2):?>
                    <a class="news-detail__btn--prev" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><svg class="ico ico-color-arrow-circle"><use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use></svg></a>
                <?else:?>
                    <a class="news-detail__btn--prev" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><svg class="ico ico-color-arrow-circle"><use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use></svg></a>
                <?endif?>
            <?endif?>

        <?else:?>
            <svg class="ico ico-color-arrow-circle"><use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use></svg>
        <?endif?>

        <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
            <a class="news-detail__btn--next" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><svg class="ico ico-color-arrow-circle"><use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use></svg></a>
        <?else:?>
            <svg class="ico ico-color-arrow-circle"><use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use></svg>
        <?endif?>

    </div>
</div>
