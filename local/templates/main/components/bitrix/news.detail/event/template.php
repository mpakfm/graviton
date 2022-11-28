<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    03.10.2022
 * Time:    5:34
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
<main class="main">
    <section class="s-events-last s-events-last-detail">
        <div class="l-default">
            <div class="s-events-last__wrap">

                <div class="s-events-last__image">
                    <?php if (!empty($arResult['DETAIL_PICTURE']) && $arResult['DETAIL_PICTURE']['SRC'] != '') { ?>
                    <img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arResult['NAME'];?>">
                    <?php } ?>
                </div>
                <h1 class="s-events-last__title"><?=$arResult['DISPLAY_PROPERTIES']['TOP_TITLE']['DISPLAY_VALUE'];?></h1>
            </div>
            <div class="s-events-last__date"><span><?=$arResult['DISPLAY_PROPERTIES']['TOP_PLACE']['DISPLAY_VALUE'];?>,</span> <?=$arResult['DISPLAY_PROPERTIES']['TOP_DATE']['DISPLAY_VALUE'];?></div>
        </div>
    </section>
    <section class="s-events-description">
        <div class="l-default">
            <div class="s-events-description__wrapper">
                <div class="s-events-description__content">
                    <?php if ($arResult['DISPLAY_PROPERTIES']['DETAIL_SUB_TITLE']['DISPLAY_VALUE'] != '') { ?>
                    <h2 class="s-events-description__title"><?=$arResult['DISPLAY_PROPERTIES']['DETAIL_SUB_TITLE']['DISPLAY_VALUE'];?></h2>
                    <?php } ?>
                    <div class="s-events-description__text">
                        <?=$arResult['DETAIL_TEXT'];?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if (array_key_exists('DETAIL_BANNER', $arResult['DISPLAY_PROPERTIES']) || array_key_exists('DETAIL_SLOGAN', $arResult['DISPLAY_PROPERTIES'])) { ?>
    <section class="s-events-banner">
        <div class="l-default">
            <div class="s-events-banner__wrapper">
                <?php if (array_key_exists('DETAIL_BANNER', $arResult['DISPLAY_PROPERTIES']) && $arResult['DISPLAY_PROPERTIES']['DETAIL_BANNER']['FILE_VALUE']['SRC'] != '') { ?>
                <div class="s-events-banner__img"><img src="<?=$arResult['DISPLAY_PROPERTIES']['DETAIL_BANNER']['FILE_VALUE']['SRC'];?>" alt="<?=$arResult['DISPLAY_PROPERTIES']['DETAIL_SLOGAN']['DISPLAY_VALUE'];?>"></div>
                <?php } ?>
                <?php if (array_key_exists('DETAIL_SLOGAN', $arResult['DISPLAY_PROPERTIES'])) { ?>
                <h2 class="s-events-banner__title"><?=$arResult['DISPLAY_PROPERTIES']['DETAIL_SLOGAN']['DISPLAY_VALUE'];?></h2>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php if (array_key_exists('DETAIL_LINK', $arResult['DISPLAY_PROPERTIES'])) { ?>
    <section class="s-events-btn">
        <div class="l-default">
            <div class="s-events-btn__wrapper">
                <h3 class="s-events-btn__title">Принять участие в мероприятии</h3>
                <div class="s-events-btn__container">
                    <div id="blackhole"><a class="centerHover" href="<?=$arResult['DISPLAY_PROPERTIES']['DETAIL_LINK']['DISPLAY_VALUE'];?>"><span>Зарегистрироваться</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="s-events-slider">
        <?php /** ?>
        <?php if (array_key_exists('DETAIL_PHOTO', $arResult['DISPLAY_PROPERTIES'])) { ?>
        <div class='scroll-animations-example' data-scroll-container>
            <div class='scrollsection' data-scroll-section>
                <?php foreach ($arResult['DISPLAY_PROPERTIES']['DETAIL_PHOTO']['FILE_VALUE'] as $photo) { ?>
                <div class='item -normal' data-scroll data-scroll-speed="2">
                    <img class='image' src='<?=$photo['SRC'];?>'>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        <?php */ ?>
        <div class="s-events-slider__more">
            <a class="s-events-slider__more-text" href="/events">Венуться к списку мероприятий</a>
            <div class="s-events-slider__more-arrow"><svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 1H1L6.35135 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </section>
    <div class="s-feedback">
        <div class="s-feedback__content">
            <div class="s-feedback__content-top">
                <div class="l-default">
                    <div class="s-feedback__item">
                        <div class="s-feedback__item-text">Остались вопросы? Свяжитесь с нами</div>
                    </div>
                    <div class="s-feedback__item"><a class="s-feedback__item-btn" href="mailto:sale@graviton.ru"> Связаться с нами</a></div>
                </div>
            </div>
            <div class="s-feedback__content-bottom">
                <div class="l-default">
                    <div class="s-feedback__item">
                        <div class="s-feedback__item-note">*Вышеприведенные характеристики являются теоретическими величинами и зависят от дизайна продукта. Для предоставления точной информации об устройствах и для обеспечения ее соответствия с харакетристиками и функциями фактических продуктов компания Гравитон может вносить изменения в режиме реального времени. Сведения о продукции могут быть изменены без предварительного уведомления.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
