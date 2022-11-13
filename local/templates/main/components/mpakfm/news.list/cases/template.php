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

use Library\Tools\Breadcrumb;

$this->setFrameMode(true);
if ($arParams['AJAX_MODE'] != 'Y') {
?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        $('.cases__btn-more').click(function(){
            $.ajax({
                url: $(this).data('url'),
                type: 'GET',
                success: function (data) {
                    let url = null;
                    let item = $(data).children()[0];
                    if (item) {
                        url = $(item).data('pageurl');
                        if (url) {
                            $('.cases__btn-more').attr('data-url', url);
                            $('.cases__btn-more').data('url', url);
                        }
                    }
                    if (!url) {
                        $('.cases__btn-more').hide();
                    }
                    $('.s-cases-cards__items-more').before($(data).children());
                }
            });
        });
    });
</script>
<main class="main">
    <section class="s-cases-cards">
        <div class="l-default">
            <div class="s-cases-cards__wrapper">
                <div class="s-cases-cards__top">
                    <div class="s-cases-cards__title">КЕЙСЫ И ПРОЕКТЫ</div>
                    <div class="s-cases-cards__description">Портфолио команды по поставкам и готовым решениям, разработке, и интеграции</div>
                </div>
                <div class="s-cases-cards__tabs">
                    <?php foreach($arResult['SECTIONS'] as $key => $section) { ?>
                        <a class="s-cases-cards__tab <?=(Breadcrumb::$code == $section['CODE'] ? 'active' : '');?>" href="/cases/<?=$section['CODE'];?>"><?=$section['NAME'];?></a>
                    <?php } ?>
                </div>
                <div class="s-cases-cards__items">
                    <?php } ?>
                    <?php foreach($arResult["ITEMS"] as $arItem) { ?>
                        <?php
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" <?php if ($arParams['AJAX_MODE'] == 'Y' && $key == 0) { ?>data-pageurl="<?=$arResult["NAV_STRING"]?>"<?php } ?> class="s-cases-card" data-category="<?=$arItem['IBLOCK_SECTION_ID'];?>">
                            <div class="s-cases-card__top"><?=$arItem['ID'];?>.</div>
                            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])) { ?>
                            <div class="s-cases-card__img">
                                <picture>
                                    <source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/>
                                </picture>
                            </div>
                            <?php } ?>
                            <div class="s-cases-card__info">
                                <div class="s-cases-card__info-top">
                                    <div class="s-cases-card__title"><?=$arItem['NAME'];?></div>
                                    <?php if ($arItem['DISPLAY_PROPERTIES']['LOGO']['FILE_VALUE']) { ?>
                                    <div class="s-cases-card__logo"><img src="<?=$arItem['DISPLAY_PROPERTIES']['LOGO']['FILE_VALUE']['SRC']?>" alt=""></div>
                                    <?php } ?>
                                </div>
                                <div class="s-cases-card__text">
                                    <p><?=$arItem['DISPLAY_PROPERTIES']['SUB_TITLE']['VALUE'];?></p>
                                </div>
                                <div class="s-cases-card__list">
                                    <?=$arItem["PREVIEW_TEXT"]?>
                                </div>
                            </div>
                            <div class="s-cases-card__bottom"><a class="s-cases-card__link" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                                    <div class="s-cases-card__link-text">Посмотреть кейс</div>
                                    <div class="s-cases-card__link-arrow"><svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1H19L13.6486 6" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div></a></div>
                        </div>
                    <?php } ?>
                    <?php if ($arParams['AJAX_MODE'] != 'Y') { ?>
                    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                        <?=$arResult["NAV_STRING"]?>
                    <?endif;?>
                </div>
                <div class="s-cases-cards__btn">
                    <div class="s-cases-cards__btn-text">еще</div>
                    <div class="s-cases-cards__btn-bordered btn btn--bordered">Показать больше</div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-banner">
        <div class="l-default">
            <div class="s-banner__title">
                <h1 class="title title--h1-banner s-banner__title title--medium">Давайте вместе создадим проект</h1>
            </div>
        </div>
        <div class="s-banner__img">
            <picture>
                <source srcset="img/cases/banner.jpg" type="image/jpg" media="(min-width: 768px)"/>
                <source srcset="img/cases/banner-small.jpg" type="image/jpg" media="(max-width: 768px)"/><img src="img/cases/banner.jpg" alt=""/>
            </picture>
        </div>
    </section>
    <section class="s-usefull">
        <div class="l-default">
            <form class="s-usefull__form">
                <div class="s-usefull__title">Была ли полезна эта страница?</div>
                <div class="s-usefull__btns">
                    <button class="s-usefull__btn btn btn--bordered" data-value="yes" type="submit">Да</button><span>/</span>
                    <button class="s-usefull__btn btn btn--bordered" data-value="no" type="submit">нет</button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php } ?>
