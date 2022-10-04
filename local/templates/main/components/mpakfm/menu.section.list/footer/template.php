<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    25.09.2022
 * Time:    20:10
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

$first  = true;
$second = false;

?>
<div class="footer__nav">
    <?php foreach($arResult['SECTIONS'] as $section) {?>
        <?php if ($section['ELEMENT_CNT'] > 0) {?>
            <div class="footer__nav-column">
                <?php if ($section['UF_LINK'] != '') { ?>
                    <a class="footer__nav-top" href="<?=$section['UF_LINK'];?>">
                <?php } else { ?>
                    <div class="footer__nav-top">
                <?php } ?>
                    <div class="footer__nav-title">
                        <?=$section['NAME'];?>
                    </div>
                    <div class="footer__nav-arrow">
                        <svg class="ico ico-mono-arrow-fat">
                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                        </svg>
                    </div>
                <?php if ($section['UF_LINK'] != '') { ?>
                    </a>
                <?php } else { ?>
                    </div>
                <?php } ?>
                <div class="footer__nav-list">
                    <?php foreach($arResult['ELEMENTS'][$section['ID']] as $item) { ?>
                        <a class="footer__nav-item" href="<?=$item['PROPERTY_LINK_VALUE'];?>" <?=($item['PROPERTY_BLANK_VALUE'] != '' ? 'target="_blank"' : '');?>><?=$item['NAME'];?></a>
                    <?php } ?>
                </div>
            </div>
        <?php } else { ?>
            <?php
            if ($first) {
                ?><div class="footer__nav-column footer__nav-column--nobd"><?php
            }
            ?>
            <a class="footer__nav-top footer__nav-title--item" href="<?=$section['UF_LINK'];?>">
                <div class="footer__nav-title"><?=$section['NAME'];?></div>
                <div class="footer__nav-arrow">
                    <svg class="ico ico-mono-arrow-fat">
                        <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                    </svg>
                </div>
            </a>
            <?php
                if ($second) {
                    ?></div><?php
                    $first  = true;
                    $second = false;
                } else {
                    $first  = false;
                    $second = true;
                }
                ?>
        <?php } ?>
    <?php } ?>
</div>
