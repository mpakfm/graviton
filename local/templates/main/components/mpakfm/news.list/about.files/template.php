<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    11.11.2022
 * Time:    0:39
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
<section class="s-company-materials">
    <div class="l-default">
        <h2 class="s-company-materials__title">Материалы о компании</h2>
        <div class="s-company-materials__items">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
            <a class="s-company-materials__item" href="<?=$item['DETAIL_PAGE_URL'] . (array_key_exists('clear_cache', $_REQUEST) && $_REQUEST['clear_cache'] == 'Y' ? '?clear_cache=Y' : '' );?>" download>
                <div class="s-company-materials__item-icon">
                    <svg class="ico ico-mono-icon-download">
                        <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                    </svg>
                </div>
                <div class="s-company-materials__item-title"><?=$item['NAME'];?></div>
            </a>
            <?php } ?>
        </div>
    </div>
</section>
