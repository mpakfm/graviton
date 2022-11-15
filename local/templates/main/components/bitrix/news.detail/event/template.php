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
<section class="news-detail">
    <div class="l-default">
        <div class="l-content">
            <div class="news-detail__container">
                <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                    <div class="news-detail__date">
                        <div class="news-detail__date--day"><?=$arResult["DISPLAY_ACTIVE_FROM_DAY"]?> </div>
                        <div class="news-detail__date--month"><?=$arResult["DISPLAY_ACTIVE_FROM_MONTH"]?></div>
                    </div>
                <?endif;?>
                <div class="news-detail__content">
                    <div class="news-detail__content--img">
                        <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                            <div class="news-detail__topic">
                                <div class="news-detail__topic--day"><?=$arResult["DISPLAY_ACTIVE_FROM_DAY"]?> </div>
                                <div class="news-detail__topic--month"><?=$arResult["DISPLAY_ACTIVE_FROM_MONTH"]?></div>
                            </div>
                        <?endif;?>
                        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                            <picture>
                                <source data-srcset="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" type="image/jpg"/>
                                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="undefined"/>
                            </picture>
                        <?endif?>
                    </div>
                    <?php if ($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]) { ?>
                    <div class="news-detail__content--title"><?=$arResult["NAME"]?></div>
                    <?php } ?>
                    <div class="news-detail__content--text">
                        <?if($arResult["DETAIL_TEXT"] <> ''):?>
                            <?echo $arResult["DETAIL_TEXT"];?>
                        <?endif?>
                    </div>
                    <div class="news-detail__more">
                        <a class="news-detail__more--all" href="/events">
                            Вернуться к списку мероприятий
                            <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
<!--                        <div class="news-detail__more--btn">-->
<!--                            <a class="news-detail__btn--prev">-->
<!--                                <svg class="ico ico-color-arrow-circle">-->
<!--                                    <use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use>-->
<!--                                </svg>-->
<!--                            </a>-->
<!--                            <a class="news-detail__btn--next">-->
<!--                                <svg class="ico ico-color-arrow-circle">-->
<!--                                    <use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use>-->
<!--                                </svg>-->
<!--                            </a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
