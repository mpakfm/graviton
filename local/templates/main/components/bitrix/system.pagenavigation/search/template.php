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
<div class="s-searching-results__navigation">
    <ul class="s-searching-results__paginations">
        <?php while($arResult["nStartPage"] <= $arResult["nEndPage"]) { ?>
            <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                <li class="s-searching-results__pagination-item is-current"><?=$arResult["nStartPage"]?></li>
            <?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
                <li class="s-searching-results__pagination-item"><a class="s-searching-results__pagination-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
            <?else:?>
                <li class="s-searching-results__pagination-item"><a class="s-searching-results__pagination-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
            <?endif?>
            <?$arResult["nStartPage"]++?>
        <?php } ?>
        <!--
        <li class="s-searching-results__pagination-item is-current"><a class="s-searching-results__pagination-link" href="">1</a></li>
        <li class="s-searching-results__pagination-item"><a class="s-searching-results__pagination-link" href="">2</a></li>
        <li class="s-searching-results__pagination-item"><a class="s-searching-results__pagination-link" href="">3</a></li>
        <li class="s-searching-results__pagination-item"><a class="s-searching-results__pagination-link" href="">4</a></li>
        -->
    </ul>
    <a class="s-searching-results__back-link" href=""><span>Вернуться на главную</span>
        <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 1H1L6.35135 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
</div>
<?php
/*
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
*/ ?>
