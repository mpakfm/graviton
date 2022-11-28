<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    12.11.2022
 * Time:    0:17
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

use Library\Tools\Stringer;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arCloudParams = [
    "SEARCH"          => $arResult["REQUEST"]["~QUERY"],
    "TAGS"            => $arResult["REQUEST"]["~TAGS"],
    "CHECK_DATES"     => $arParams["CHECK_DATES"],
    "arrFILTER"       => $arParams["arrFILTER"],
    "SORT"            => $arParams["TAGS_SORT"],
    "PAGE_ELEMENTS"   => $arParams["TAGS_PAGE_ELEMENTS"],
    "PERIOD"          => $arParams["TAGS_PERIOD"],
    "URL_SEARCH"      => $arParams["TAGS_URL_SEARCH"],
    "TAGS_INHERIT"    => $arParams["TAGS_INHERIT"],
    "FONT_MAX"        => $arParams["FONT_MAX"],
    "FONT_MIN"        => $arParams["FONT_MIN"],
    "COLOR_NEW"       => $arParams["COLOR_NEW"],
    "COLOR_OLD"       => $arParams["COLOR_OLD"],
    "PERIOD_NEW_TAGS" => $arParams["PERIOD_NEW_TAGS"],
    "SHOW_CHAIN"      => $arParams["SHOW_CHAIN"],
    "COLOR_TYPE"      => $arParams["COLOR_TYPE"],
    "WIDTH"           => $arParams["WIDTH"],
    "CACHE_TIME"      => $arParams["CACHE_TIME"],
    "CACHE_TYPE"      => $arParams["CACHE_TYPE"],
    "RESTART"         => $arParams["RESTART"],
];

if (is_array($arCloudParams["arrFILTER"])) {
    foreach ($arCloudParams["arrFILTER"] as $strFILTER) {
        if ($strFILTER == "main") {
            $arCloudParams["arrFILTER_main"] = $arParams["arrFILTER_main"];
        } elseif ($strFILTER == "forum" && IsModuleInstalled("forum")) {
            $arCloudParams["arrFILTER_forum"] = $arParams["arrFILTER_forum"];
        } elseif (mb_strpos($strFILTER, "iblock_") === 0) {
            if (isset($arParams["arrFILTER_" . $strFILTER]) && is_array($arParams["arrFILTER_" . $strFILTER])) {
                foreach ($arParams["arrFILTER_" . $strFILTER] as $strIBlock) {
                    $arCloudParams["arrFILTER_" . $strFILTER] = $arParams["arrFILTER_" . $strFILTER];
                }
            }
        } elseif ($strFILTER == "blog") {
            $arCloudParams["arrFILTER_blog"] = $arParams["arrFILTER_blog"];
        } elseif ($strFILTER == "socialnetwork") {
            $arCloudParams["arrFILTER_socialnetwork"] = $arParams["arrFILTER_socialnetwork"];
        }
    }
}
?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        $('#js-search-input').val('<?=$arResult["REQUEST"]["QUERY"]?>');
    });
</script>

<main class="main">
    <section class="s-past-searches">
        <div class="l-default">
            <div class="s-past-searches__wrap">
                <h2 class="s-past-searches__title">Прошлые поисковые запросы</h2>
                <div class="s-past-searches__list">
                    <?php foreach ($arResult['LAST_QUERY'] as $item) { ?>
                    <a class="s-past-searches__item" href="/search?q=<?=$item['PHRASE'];?>" style="background-image: url(img/s-search/bg-item.png)"><?=$item['PHRASE'];?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php if ($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false) { ?>
    <?php } elseif ($arResult["ERROR_CODE"] != 0) { ?>
    <?php } elseif (count($arResult["SEARCH"]) > 0) { ?>
    <section class="s-searching-results">
        <div class="l-default">
            <div class="s-searching-results__top">
                <h1 class="s-searching-results__title">Результаты поиска<span>“<?=$arResult["REQUEST"]["QUERY"]?>”</span></h1>
                <div class="s-searching-results__found">Найдено <?=$arResult['NAV_RESULT']->NavRecordCount;?> <?=Stringer::plural($arResult['NAV_RESULT']->NavRecordCount, ['совпадение', 'совпадения', 'совпадений']); ?></div>
            </div>
            <div class="s-searching-results__main">
                <div class="s-searching-results__dropdown">
                    <div class="s-searching-results__dropdown-wrapper">
                        <div class="s-searching-results__dropdown-text">Фильтр</div>
                        <div class="s-searching-results__dropdown-arrow"><img src="img/svg/arrow-dropdown.svg" alt=""></div>
                    </div>
                </div>
                <div class="s-searching-results__filter">
                    <div class="s-searching-results__filter-title">Фильтровать по:</div>
                    <div class="s-searching-results__tabs">
                        <button class="s-searching-results__tab <?=(!$arParams['TYPE'] && !$arParams['CODE'] ? 'is-active' : '');?>" type="button">
                            <a href="/search?q=<?=$arResult["REQUEST"]["QUERY"]?>">Все результаты</a>
                        </button>
                        <?php foreach ($arResult['FILTER'] as $filter) { if ($filter['cnt'] === 0) continue; ?>
                            <button class="s-searching-results__tab <?=($filter['current'] ? 'is-active' : '');?>" type="button">
                                <a href="<?=$filter['link'];?>"><?=$filter['iblock']['NAME'];?></a>
                            </button>
                        <?php } ?>
                    </div>
                </div>
                <div class="s-searching-results__contents">
                    <div class="s-searching-results__content is-active" id="searching-results__0">
                        <div class="s-searching-results__items">
                            <?php foreach ($arResult["SEARCH"] as $arItem) { ?>
                                <?php
                                    $dt = date_create_from_format('d.m.Y', $arItem['DATE_CHANGE']);
                                ?>
                            <a class="s-searching-results__item" href="<?echo $arItem["URL"]?>">
                                <div class="s-searching-results__item-path"><?= $arItem["URL"]?></div>
                                <div class="s-searching-results__item-title"><?= $arItem["TITLE_FORMATED"]?></div>
                                <div class="s-searching-results__item-text"><?= $arItem["BODY_FORMATED"]?></div>
                            </a>
                            <?php } ?>
                        </div>
                        <?php if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") { ?>
                            <?= $arResult["NAV_STRING"];?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } else { ?>
    <section class="s-searching-results s-searching-results-empty">
        <div class="l-default">
            <div class="s-searching-results__top">
                <h1 class="s-searching-results__title">К сожалению, по вашему запросу <span>“<?=$arResult["REQUEST"]["QUERY"]?>”</span> ничего не найдено</h1>
                <div class="s-searching-results__found"><!--Найдено 3 совпадения--></div>
            </div>
            <div class="s-searching-results__contents">
                <div class="s-searching-results__content">
                    <div class="s-searching-results__sentences">
                        <div class="s-searching-results__sentences-title">Предложения</div>
                        <div class="s-searching-results__sentences-text">
                            <p>Убедитесь, что все слова написаны правильно</p>
                            <p>Попробуйте другие ключевые слова</p>
                            <p>Попробуйте более общие слова</p>
                        </div>
                    </div>
                    <div class="s-searching-results__content-popular">
                        <div class="s-searching-results__item">
                            <div class="s-searching-results__item-wrapper">
                                <div class="s-searching-results__item-title">Популярные ссылки для поиска</div>
                                <div class="s-searching-results__item-links">
                                    <?php foreach ($arResult['TOP'] as $line) { ?>
                                    <a class="s-searching-results__item-link" href="/search?q=<?=$line['PHRASE'];?>">
                                        <div class="s-searching-results__item-link--text"><?=$line['PHRASE'];?></div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </a>
                                    <?php } ?>
                                    <!--
                                    <a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </a>
                                    <a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div></a><a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div></a><a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div></a><a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div></a><a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div></a><a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div></a><a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div></a>
                                        <a class="s-searching-results__item-link" href="">
                                        <div class="s-searching-results__item-link--text">Каталог</div>
                                        <div class="s-searching-results__item-link--arrow"><svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H24L17.1622 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        </a>
                                        -->
                                        </div>
                            </div>
                        </div>
                        <!--
                        <a class="s-searching-results__back-link" href=""><span>Венуться к списку новостей</span>
                            <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 1H1L6.35135 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
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
