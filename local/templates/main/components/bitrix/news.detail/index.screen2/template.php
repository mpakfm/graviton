<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    01.10.2022
 * Time:    15:56
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

<section class="s-characteristics">
    <div class="l-default">
        <div class="s-characteristics__img"><img class="lazy" data-src="img/svg/tube.svg" alt=""></div>
        <div class="s-characteristics__items">
            <div class="s-characteristics__item">
                <div class="s-characteristics__item-content">
                    <div class="s-characteristics__item-top">
                        <div class="s-characteristics__item-icon">
                            <svg class="ico ico-mono-rus">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-rus"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="s-characteristics__item-text">
                        <?=$arResult['DISPLAY_PROPERTIES']['TEXT']['~VALUE'][0]['TEXT'];?>
                    </div>
                </div>
            </div>
            <div class="s-characteristics__item">
                <div class="s-characteristics__item-top">
                    <?=$arResult['DISPLAY_PROPERTIES']['TEXT']['~VALUE'][1]['TEXT'];?>
                </div>
                <div class="s-characteristics__item-content">
                    <div class="s-characteristics__item-text">
                        <?=$arResult['DISPLAY_PROPERTIES']['TEXT']['~VALUE'][2]['TEXT'];?>
                    </div>
                </div>
            </div>
            <div class="s-characteristics__item">
                <div class="s-characteristics__item-top">
                    <?=$arResult['DISPLAY_PROPERTIES']['TEXT']['~VALUE'][3]['TEXT'];?>
                </div>
                <div class="s-characteristics__item-content">
                    <div class="s-characteristics__item-text">
                        <?=$arResult['DISPLAY_PROPERTIES']['TEXT']['~VALUE'][4]['TEXT'];?>
                    </div>
                </div>
            </div>
            <div class="s-characteristics__item">
                <div class="s-characteristics__item-top">
                    <?=$arResult['DISPLAY_PROPERTIES']['TEXT']['~VALUE'][5]['TEXT'];?>
                </div>
                <div class="s-characteristics__item-content">
                    <div class="s-characteristics__item-text">
                        <?=$arResult['DISPLAY_PROPERTIES']['TEXT']['~VALUE'][6]['TEXT'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
