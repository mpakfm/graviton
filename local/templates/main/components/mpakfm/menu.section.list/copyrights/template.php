<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    04.10.2022
 * Time:    19:54
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

$section = $arResult['SECTION']['ID'];

?>
<div class="footer__bottom">
    <div class="footer__bottom-items">
        <?php foreach ($arResult['ELEMENTS'][$section] as $item) { ?>
        <a class="footer__bottom-item" href="<?=$item['PROPERTY_LINK_VALUE'];?>" rel="noopener" <?=($item['PROPERTY_BLANK_VALUE'] ? ' target="_blank"' : '');?>><?=$item['NAME'];?></a>
        <?php } ?>
    </div>
    <div class="footer__copyrights">© 2022 ООО «Новый Ай Ти Проект». Все права защищены</div>
</div>
