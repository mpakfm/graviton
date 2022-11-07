<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    05.11.2022
 * Time:    15:58
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

use Library\Tools\Breadcrumb;

$this->setFrameMode(true);

?>

<section class="s-top-menu">
    <div class="l-default">
        <div class="s-top-menu__slider swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="swiper-slide s-top-menu__slide <?=($item['CODE'] == Breadcrumb::$code ? 'is-active' : '');?>">
                    <a class="s-top-menu__item" href="<?=$item['DETAIL_PAGE_URL'];?>">
                        <div class="s-top-menu__item-img"><img src="<?=$item['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$item['NAME'];?>"></div>
                        <div class="s-top-menu__item-info">
                            <div class="s-top-menu__item-title"><?=$item['NAME'];?></div>
                            <div class="s-top-menu__item-text">Контрактная разработка</div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
