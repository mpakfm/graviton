<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

if ($arParams['AJAX_MODE'] != 'Y') {
?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        $('.news__btn-more').click(function(){
            $.ajax({
                url: $(this).data('url'),
                type: 'GET',
                success: function (data) {
                    let url = null;
                    let item = $(data).children()[0];
                    if (item) {
                        url = $(item).data('pageurl');
                        if (url) {
                            $('.news__btn-more').attr('data-url', url);
                            $('.news__btn-more').data('url', url);
                        }
                    }
                    if (!url) {
                        $('.news__btn-more').hide();
                    }
                    $('.news-items').append($(data).children());
                }
            });
        });
    });
</script>
<main class="main">
    <?php if ($arResult['FIRST']) { ?>
    <section class="s-events-last">
        <div class="l-default">
            <div class="s-events-last__wrap">
                <div class="s-events-last__info">
                    <div class="s-events-last__date"><?=$arResult['FIRST']['DISPLAY_PROPERTIES']['TOP_PLACE']['DISPLAY_VALUE'];?>, <?=$arResult['FIRST']['DISPLAY_PROPERTIES']['TOP_DATE']['DISPLAY_VALUE'];?></div>
                    <div class="s-events-last__text"><?=$arResult['FIRST']['PREVIEW_TEXT'];?></div>
                </div>
                <?php if (!empty($arResult['FIRST']['PREVIEW_PICTURE'])) { ?>
                <div class="s-events-last__image"><img src="<?=$arResult['FIRST']['PREVIEW_PICTURE']['SRC'];?>" alt=""></div>
                <?php } ?>
            </div>
            <a href="<?=$arResult['FIRST']['DETAIL_PAGE_URL'];?>" class="s-events-last__title"><?=$arResult['FIRST']['NAME'];?></a>
        </div>
    </section>
    <?php } ?>
    <section class="s-events-cities">
        <div class="l-default">
            <div class="s-events-cities__items">
                <?php foreach ($arResult['CITIES'] as $id => $name) { ?>
                <a class="s-events-cities__item <?=($id == $_REQUEST['city'] ? 'active' : '');?>" href="/events?city=<?=$id;?>"><?=$name;?></a>
                <?php } ?>
                <!--
                <a class="s-events-cities__item" href="">Сочи</a>
                <a class="s-events-cities__item" href="">Ижевкс</a>
                <a class="s-events-cities__item" href="">Нижний новгород</a>
                <a class="s-events-cities__item" href="">Красноярск</a>
                <a class="s-events-cities__item" href="">Санкт-Петербург</a>
                <a class="s-events-cities__item" href="">Новосибирск</a>
                <a class="s-events-cities__item" href="">Новокузнец</a>
                <a class="s-events-cities__item" href="">Самара</a>
                <a class="s-events-cities__item" href="">Уфа</a>
                <a class="s-events-cities__item" href="">Воронеж</a>
                <a class="s-events-cities__item" href="">Москва</a>
                <a class="s-events-cities__item" href="">Тюмень</a>
                <a class="s-events-cities__item" href="">Махачкала</a>
                <a class="s-events-cities__item" href="">Рязань</a>
                -->
            </div>
        </div>
    </section>
    <section class="news">
        <div class="l-default">
            <div class="l-content">
                <div class="news__container">
                    <div class="news-items">
                        <?php } // end of AJAX_MODE ?>
                        <?php foreach($arResult["ITEMS"] as $arItem) { ?>
                            <?php
                            if (strpos($arItem["ACTIVE_FROM"], ' ') !== false) {
                                $dt = date_create_from_format('d.m.Y H:i:s', $arItem["ACTIVE_FROM"]);
                            } else {
                                $dt = date_create_from_format('d.m.Y', $arItem["ACTIVE_FROM"]);
                            }
                            $arItem['ACTIVE_FROM_DAY'] = FormatDate("d", $dt->format('U'));
                            $arItem['ACTIVE_FROM_MONTH'] = FormatDate("F", $dt->format('U'));
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                        <div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" <?php if ($arParams['AJAX_MODE'] == 'Y' && $key == 0) { ?>data-pageurl="<?=$arResult["NAV_STRING"]?>"<?php } ?>>
                            <div class="news-item__content--preview">
                                <div class="preview__date"><span class="preview__date--day"><?=$arItem['ACTIVE_FROM_DAY'];?></span>
                                    <p class="preview__date--month"><?=$arItem['ACTIVE_FROM_MONTH'];?></p>
                                </div>
                                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])) { ?>
                                <div class="preview__img">
                                    <picture>
                                        <?php if ($arParams['AJAX_MODE'] != 'Y') { ?>
                                            <source data-srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/jpg"/>
                                            <img class="lazy" data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/>
                                        <?php } else { ?>
                                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/>
                                        <?php } ?>
                                    </picture>
                                </div>
                                <?php } ?>
                                <a class="preview__more" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                    <div class="preview__more--btn">Подробнее</div>
                                    <div class="preview__more--arrow"><svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div></a>
                            </div>
                            <div class="news-item__content--text">
                                <div class="text__title"><?=$arItem["NAME"]?></div>
                                <div class="text__prefix"><?=$arItem["PREVIEW_TEXT"]?></div>
                                <a class="text__more" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                    <div class="text__more--btn">Подробнее</div>
                                    <div class="text__more--arrow"><svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div></a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if ($arParams['AJAX_MODE'] != 'Y') { ?>
                    </div>
                    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                        <?=$arResult["NAV_STRING"]?>
                    <?endif;?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php } // end of AJAX_MODE ?>
