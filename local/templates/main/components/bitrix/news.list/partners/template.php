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

?>
<main class="main">
    <section class="s-partners-content">
        <div class="l-default">
            <h1 class="title title--h2">Наши партнеры</h1>
            <div class="s-partners-content__items">
                <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
                    <div class="s-partners-content__item"><img class="lazy" data-src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt=""></div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>
