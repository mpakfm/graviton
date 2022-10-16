<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    29.09.2022
 * Time:    11:23
 */
/** @var CUser $USER */
/** @var array $arResult */

?>

<div class="header__menu">
    <div class="l-default">
        <div class="header__menu-wrapper">
            <!--<div class="header__col">
                <a class="location" href="">
                    <div class="location-icon"><img src="img/svg/location.svg" alt=""></div>
                    <div class="location-text">Москва</div>
                </a>
            </div>-->
            <nav class="menu">
                <div class="menu__items">
                    <?php $depthMain     = 2; ?>
                    <?php $depthLeft     = 3; ?>
                    <?php $isLeftSubMenu = false; ?>
                    <?php foreach($arResult['MENU'] as $key => $item) { ?>
                        <div class="menu__item">
                            <a class="menu__item-link <?=($_SERVER['REQUEST_URI'] == $item['LINK'] ? 'active' : '');?>" href="<?=$item['LINK']; ?>">
                                <div class="menu__item-text"><?=$item['NAME']; ?></div>
                            </a>
                            <div class="menu__item-icon">
                                <svg class="ico ico-mono-arrow-fat">
                                    <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                </svg>
                            </div>

                            <?php if ($item['CHILD']) { ?>
                            <div class="submenu">
                                <div class="submenu__back">
                                    <div class="submenu__back-icon">
                                        <svg class="ico ico-mono-arrow-back">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-back"></use>
                                        </svg>
                                    </div>
                                    <div class="submenu__back-text">Назад </div>
                                </div>
                                <div class="submenu__items">
                                    <?php foreach ($item['CHILD'] as $secondLevel) { ?>
                                    <div class="submenu__item">
                                        <div class="submenu__item-top">
                                            <a class="submenu__item-link" <?=($secondLevel['BLANK'] ? 'target="_blank"' : '');?> href="<?=$secondLevel['LINK'];?>">
                                                <div class="submenu__item-text"><?=$secondLevel['NAME'];?></div>
                                            </a>
                                            <div class="submenu__item-icon">
                                                <svg class="ico ico-mono-arrow-fat">
                                                    <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php foreach ($item['CHILD'] as $secondLevel) { ?>
                                    <?php if ($secondLevel['CHILD']) { ?>
                                    <div class="submenu__list swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($secondLevel['CHILD'] as $thirdLevel) { ?>
                                        <a class="submenu__slide swiper-slide" href="<?=$thirdLevel['LINK'];?>">
                                            <div class="submenu__slide-info">
                                                <div class="submenu__slide-text"><?=$thirdLevel['NAME'];?></div>
                                                <div class="submenu__slide-watch">
                                                    <div class="submenu__slide-watch--icon">
                                                        <svg class="ico ico-mono-search">
                                                            <use xlink:href="img/sprite-mono.svg#ico-mono-search"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="submenu__slide-watch--text">Смотреть</div>
                                                </div>
                                            </div>
                                            <div class="submenu__slide-img">
                                                <picture>
                                                    <!--<source srcset="img/product/1.webp" type="image/webp"/>-->
                                                    <source srcset="<?=$thirdLevel['IMG'];?>" type="image/png"/><img src="<?=$thirdLevel['IMG'];?>" alt=""/>
                                                </picture>
                                            </div>
                                        </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } // end foreach ?>
                    <?php if ($USER->IsAdmin()) {?>
                    <div class="menu__item">
                        <a class="menu__item-link" href="/admin-docs">
                            <div class="menu__item-text">Help</div>
                        </a>
                        <div class="menu__item-icon">
                            <svg class="ico ico-mono-arrow-fat">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                            </svg>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </nav>
        </div>
    </div>
</div>
