<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    01.10.2022
 * Time:    22:42
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

<section class="s-home-products">
    <div class="l-default">
        <div class="s-home-products__sliders-container">
            <div class="s-home-products__sliders">
                <?php foreach($arResult['SECTIONS'] as $section) { ?>
                <div class="s-home-products__slider__mobile" data-category="cat<?=$section['ID'];?>"></div>
                <div class="s-home-products__slider swiper-container" data-category="cat<?=$section['ID'];?>">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-wrapper">
                        <?php foreach ($section['ITEMS'] as $item) { ?>
                        <div class="product swiper-slide">
                            <div class="product__top">
                                <div class="product__top-caption">
                                    <div class="product__top-text"><?=$item['DISPLAY_PROPERTIES']['UPTITLE']['DISPLAY_VALUE'];?></div>
                                </div>
                                <div class="product__img">
                                    <picture>
                                        <?php if ($item['PREVIEW_PICTURE']) { ?>
                                            <!--<source data-srcset="img/product/1.webp" type="image/webp"/>-->
                                            <source data-srcset="<?=$item['PREVIEW_PICTURE']['SRC'];?>" type="image/png"/>
                                            <img class="lazy" data-src="<?=$item['PREVIEW_PICTURE']['SRC'];?>" alt=""/>
                                        <?php } else { ?>
                                            <source data-srcset="img/product/1.webp" type="image/webp"/>
                                            <source data-srcset="img/product/1.png" type="image/png"/>
                                            <img class="lazy" data-src="img/product/1.png" alt=""/>
                                        <?php } ?>
                                    </picture>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__subtitle"><?=$item['DISPLAY_PROPERTIES']['SUBTITLE']['DISPLAY_VALUE'];?></div>
                                <div class="product__info-columns">
                                    <div class="product__info-column">
                                        <div class="product__name"><?=$item['NAME'];?></div><a class="product__link" href="">
                                            <img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                    </div>
                                    <div class="product__info-column">
                                        <div class="product__info-title">Описание</div>
                                        <?php if ($item['DISPLAY_PROPERTIES']['RAM']['DISPLAY_VALUE']) { ?>
                                        <div class="product__info-item">
                                            <div class="product__info-caption">Оперативная память</div>
                                            <div class="product__info-text"><?=$item['DISPLAY_PROPERTIES']['RAM']['DISPLAY_VALUE'];?></div>
                                        </div>
                                        <?php } ?>
                                        <?php if ($item['DISPLAY_PROPERTIES']['HDD']['DISPLAY_VALUE']) { ?>
                                        <div class="product__info-item">
                                            <div class="product__info-caption">Накопители</div>
                                            <div class="product__info-text"><?=$item['DISPLAY_PROPERTIES']['HDD']['DISPLAY_VALUE'];?></div>
                                        </div>
                                        <?php } ?>
                                        <?php if ($item['DISPLAY_PROPERTIES']['CPU']['DISPLAY_VALUE']) { ?>
                                        <div class="product__info-item">
                                            <div class="product__info-caption">Процессор</div>
                                            <div class="product__info-text"><?=$item['DISPLAY_PROPERTIES']['CPU']['DISPLAY_VALUE'];?></div>
                                        </div>
                                        <?php } ?>
                                        <?php if ($item['DISPLAY_PROPERTIES']['DISPLAY']['DISPLAY_VALUE']) { ?>
                                        <div class="product__info-item">
                                            <div class="product__info-caption">Дисплей</div>
                                            <div class="product__info-text"><?=$item['DISPLAY_PROPERTIES']['DISPLAY']['DISPLAY_VALUE'];?></div>
                                        </div>
                                        <?php } ?>
                                        <?php if ($item['DISPLAY_PROPERTIES']['MB1']['DISPLAY_VALUE']) { ?>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Только для матплат1</div>
                                                <div class="product__info-text"><?=$item['DISPLAY_PROPERTIES']['MB1']['DISPLAY_VALUE'];?></div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($item['DISPLAY_PROPERTIES']['MB2']['DISPLAY_VALUE']) { ?>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Только для матплат2</div>
                                                <div class="product__info-text"><?=$item['DISPLAY_PROPERTIES']['MB2']['DISPLAY_VALUE'];?></div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="product__info-column">
                                        <div class="product__info-description"><?=$item['DISPLAY_PROPERTIES']['TEXT']['DISPLAY_VALUE'];?></div>
                                    </div>
                                    <div class="product__info-column">
                                        <div class="product__made"><?=$item['DISPLAY_PROPERTIES']['CORNER']['DISPLAY_VALUE'];?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="s-home-products__categories">
        <div class="l-default">
            <div class="s-home-products__categories-wrapper">
                <?php foreach($arResult['SECTIONS'] as $section) { ?>
                <div class="s-home-products__category" data-category="cat<?=$section['ID'];?>"><?=$section['NAME'];?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
