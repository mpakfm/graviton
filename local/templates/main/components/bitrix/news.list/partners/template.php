<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    07.10.2022
 * Time:    16:41
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

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
$cnt = 0;
$max = ceil(count($arResult["ITEMS"]) / 5) * 5;
?>
<section class="s-partners-page">
    <div class="l-default">
        <h1 class="title title--h2">Наши партнеры</h1>
        <div class="s-partners-page__items">
                <?php foreach ($arResult["ITEMS"] as $arItem) { $cnt++; ?>
                    <a class="s-partners-page__item" <?php if ($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']) { ?> href="<?=$arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'];?>" <?php } ?>>
                        <div class="s-partners-page__item-logo">
                            <img class="lazy" data-src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="">
                        </div>
                    </a>
                <?php } ?>
                <!--
                <div class="s-partners-page__item-logo"><img class="lazy" data-src="img/svg/logos/elbrus.svg" alt=""></div></a><a class="s-partners-page__item" href="">
                <div class="s-partners-page__item-logo"><img class="lazy" data-src="img/svg/logos/basealt.svg" alt=""></div></a><a class="s-partners-page__item" href="">
                <div class="s-partners-page__item-logo"><img class="lazy" data-src="img/svg/logos/astralinux.svg" alt=""></div></a><a class="s-partners-page__item" href="">
                <div class="s-partners-page__item-logo"><img class="lazy" data-src="img/svg/logos/code.svg" alt=""></div></a><a class="s-partners-page__item" href="">
                <div class="s-partners-page__item-logo"><img class="lazy" data-src="img/svg/logos/open.svg" alt=""></div></a><a class="s-partners-page__item" href="">
                <div class="s-partners-page__item-logo"><img class="lazy" data-src="img/svg/logos/aitis.svg" alt=""></div></a><a class="s-partners-page__item s-partners-page__btn" href="">
                -->
                <?php for ($i = $cnt; $i < $max; $i++) { ?>
                    <a class="s-partners-page__item s-partners-page__btn" href="#popup-registration" data-fancybox>
                    <!--<a class="s-partners-page__item s-partners-page__btn" href="javascript:void(0);">-->
                        <div class="s-partners-page__item-logo">
                            <div class="s-partners-page__item-text">Стать партнером</div>
                        </div>
                    </a>
                <?php } ?>
        </div>
    </div>
</section>
