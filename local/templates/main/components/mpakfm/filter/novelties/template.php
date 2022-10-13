<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    14.10.2022
 * Time:    0:49
 */
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    13.10.2022
 * Time:    22:44
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
<section class="s-goods">
    <div class="l-default">
        <div class="content-active">
            <h2 class="title title--h2 s-goods__title">Новинки</h2>

            <div class="s-goods__items">
                <?php foreach($arResult['ITEMS'] as $product) { ?>
                    <div class="s-goods__item">
                        <div class="s-goods__item-info">
                            <div class="s-goods__item-img">
                                <?php if ($product['PREVIEW_PICTURE'] && $arResult['FILES'][$product['PREVIEW_PICTURE']]) { ?>
                                    <img src="<?=$arResult['FILES'][$product['PREVIEW_PICTURE']]['SRC'];?>" alt=""/>
                                <?php } else { ?>
                                    <img src="/local/templates/main/img/goods/no-image-240x130.png" alt=""/>
                                <?php } ?>
                            </div>
                            <div class="s-goods__item-text">
                                <div class="s-goods__item-name"><?=$product['NAME'];?></div>
                                <div class="s-goods__item-subtitle"><?=$product['PROPERTY_SUBTITLE_VALUE'];?></div>
                                <div class="s-goods__item-specifications"><?=$product['PREVIEW_TEXT'];?></div>
                            </div>
                        </div>
                        <div class="s-goods__item-buttons">
                            <a class="s-goods__item-more" href="<?=$product['URL'];?>">Подробнее</a>
                            <a class="s-goods__item-buy js-item-by" data-name="<?=$product['NAME'];?>" data-img="<?=$arResult['FILES'][$product['PREVIEW_PICTURE']]['SRC'];?>" href="#popup-categories" data-fancybox>Где купить</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
