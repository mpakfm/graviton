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
<?php foreach ($arResult['ITEMS'] as $item) { ?>
<div class="s-drivers__table-item">
    <div class="s-drivers__table-text"><?=$item['NAME'];?></div><a class="s-drivers__table-right" href="<?=$item['DETAIL_PAGE_URL'] . (array_key_exists('clear_cache', $_REQUEST) && $_REQUEST['clear_cache'] == 'Y' ? '?clear_cache=Y' : '' );?>" download>
        <div class="s-drivers__table-icon">
            <svg class="ico ico-mono-icon-download">
                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
            </svg>
        </div>
        <div class="s-drivers__table-weight"><?=CFile::FormatSize($item['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['FILE_SIZE'], 1);?></div></a>
</div>
<?php } ?>
