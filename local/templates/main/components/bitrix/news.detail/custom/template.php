<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    11.09.2022
 * Time:    22:18
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

$APPLICATION->SetTitle("Graviton - " . $arResult['NAME']);
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

$APPLICATION->SetTitle("Graviton - " . $arResult['NAME']);
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

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
<!--                                    <source data-srcset="/img/news/1-big.webp" type="image/webp"/>-->
                                    <source data-srcset="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" type="image/jpg"/>
                                    <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="undefined"/>
                                </picture>
                            <?endif?>

                        </div>
                        <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
                            <div class="news-detail__content--title"><?=$arResult["NAME"]?></div>
                        <?endif;?>

                        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
                            <div class="news-detail__content--text">
                                <?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?>
                            </div>
                        <?endif;?>

                        <?if($arResult["DETAIL_TEXT"] <> ''):?>
                            <?echo $arResult["DETAIL_TEXT"];?>
                        <?endif?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
