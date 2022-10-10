<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    01.10.2022
 * Time:    2:24
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
?>
<section class="s-partners">
    <div class="l-default">
        <h2 class="title title--h2 text-center">Где купить ?</h2>
        <div class="s-partners__items s-partners__type-one">
            <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
            <div class="s-partners__item"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt=""></div>
            <?php } ?>
        </div>
    </div>
</section>
