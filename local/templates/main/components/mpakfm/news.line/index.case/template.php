<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    01.10.2022
 * Time:    2:22
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
<section class="s-home-articles">
    <div class="l-default">
        <div class="s-home-articles__items">
            <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
            <div class="s-home-articles__item">
                <?php if (!empty($arItem['PREVIEW_PICTURE'])) { ?>
                    <div class="s-home-articles__item-img">
                        <picture>
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt=""/>
                        </picture>
                    </div>
                <?php } ?>

                <div class="s-home-articles__item-title"><?=$arItem["NAME"]?></div>
                <div class="s-home-articles__item-subtitle"><?=$arItem["PROPERTY_SUB_TITLE_VALUE"]?></div>
                <?php if (!empty($arItem['PREVIEW_TEXT'])) { ?>
                    <?=$arItem['PREVIEW_TEXT'];?>
                <?php } ?>

                <div class="s-home-articles__item-bottom"><a class="s-home-articles__link" href="/cases/<?=$arItem["CODE"]?>">
                        <div class="s-home-articles__link-text">Посмотреть кейс</div>
                        <div class="s-home-articles__link-icon"><svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div></a></div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
