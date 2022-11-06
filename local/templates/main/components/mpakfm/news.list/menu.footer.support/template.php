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

$this->setFrameMode(true);

?>
<div class="footer__nav-list">
    <?php foreach ($arResult['ITEMS'] as $item) { ?>
    <a class="footer__nav-item" href="<?=$item['DETAIL_PAGE_URL'];?>"><?=$item['NAME'];?></a>
    <?php } ?>
</div>
