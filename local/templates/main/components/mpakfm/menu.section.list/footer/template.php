<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    25.09.2022
 * Time:    20:10
 */
/** @var array $arResult */

?>

<div class="footer__nav">
    <?php foreach($arResult['SECTIONS'] as $section) {?>
    <div class="footer__nav-column">
        <div class="footer__nav-title">
            <?php if ($section['UF_LINK'] != '') { ?><a class="" href="<?=$section['UF_LINK'];?>"><?php } ?>
            <?=$section['NAME'];?>
            <?php if ($section['UF_LINK'] != '') { ?></a><?php } ?>
        </div>
        <?php if ($section['ELEMENT_CNT'] > 0) { ?>
            <div class="footer__nav-list">
                <?php foreach($arResult['ELEMENTS'][$section['ID']] as $item) { ?>
                <a class="footer__nav-item" href="<?=$item['PROPERTY_LINK_VALUE'];?>" <?=($item['PROPERTY_BLANK_VALUE'] != '' ? 'target="_blank"' : '');?>><?=$item['NAME'];?></a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>
