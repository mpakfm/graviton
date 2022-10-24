<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
if ($arResult['META_TAGS']['TITLE']) {
    $APPLICATION->SetTitle($arResult['META_TAGS']['TITLE']);
}
$isAdmin = $USER->IsAdmin();
?>
<section class="s-product-about" style="background-image: url(img/bg/product_page.jpg);">
    <div class="l-default">
        <div class="s-product-about__wrap">
            <div class="s-product-about__top">
                <div class="s-product-about__slogan"><?=htmlspecialchars_decode($arResult['PARENT']['UF_ADVERT']);?></div>
                <div class="s-product-about__logo"><?=($arResult['PARENT']['UF_LOGO'] ? $arResult['PARENT']['UF_LOGO'] : 'эталон');?></div>
            </div>
            <div class="s-product-about__image">
                <?php if (empty($arResult['DETAIL_PICTURE'])) { ?>
                    <img src="./img/product-about/cover.png" alt="">
                <?php } else { ?>
                    <img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="">
                <?php } ?>
            </div>
            <div class="s-product-about__info">
                <h1 class="s-product-about__title"><?=$arResult['NAME'];?></h1>
                <div class="s-product-about__list">
                    <?php if (!empty($arResult['PROPERTIES']['TEXT_ABOUT']['VALUE'])) { ?>
                            <?php foreach ($arResult['PROPERTIES']['TEXT_ABOUT']['VALUE'] as $value) { ?>
                                <div class="s-product-about__item s-product-about__item-text"><?=$value;?></div>
                            <?php } ?>
                    <?php } else { ?>
                        <div class="s-product-about__item s-product-about__item-text"></div>
                    <?php } ?>

                    <div class="s-product-about__registry s-product-about__item-text"><?=$arResult['PROPERTIES']['TEXT_REGYSTRY']['VALUE'];?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="s-product-characteristics" id="product-characteristics" style="background-image: url(img/product-characteristics/bg.jpg);">
    <div class="l-default">
        <?php if (empty($arResult['PROPERTIES']['DETAIL_IMG_CENTER']['VALUE'])) { ?>
            <div class="s-product-characteristics__bg" style="background-image: url(./img/product-characteristics/notebook.png)"></div>
        <?php } else { ?>
            <div class="s-product-characteristics__bg" style="background-image: url(<?=$arResult['FILES'][$arResult['PROPERTIES']['DETAIL_IMG_CENTER']['VALUE']]['SRC'];?>)"></div>
        <?php } ?>
        <div class="s-product-characteristics__content">
            <div class="s-product-characteristics__items">
                <div class="s-product-characteristics__row">
                    <div class="s-product-characteristics__row-title">ПАМЯТЬ И SSD-НАКОПИТЕЛЬ</div>
                    <div class="s-product-characteristics__row-items">
                        <?php if (!empty($arResult['PROPERTIES']['VOLUME_SSD']['VALUE'])) { ?>
                        <div class="s-product-characteristics__item">
                            <div class="s-product-characteristics__item-title">SSD‑накопитель до</div>
                            <div class="s-product-characteristics__item-text"><?=$arResult['PROPERTIES']['VOLUME_SSD']['VALUE'];?> ТБ</div>
                        </div>
                        <?php } ?>
                        <?php if (!empty($arResult['PROPERTIES']['VOLUME_HDD']['VALUE'])) { ?>
                            <div class="s-product-characteristics__item">
                                <div class="s-product-characteristics__item-title">HDD‑накопитель до</div>
                                <div class="s-product-characteristics__item-text"><?=$arResult['PROPERTIES']['VOLUME_HDD']['VALUE'];?> ТБ</div>
                            </div>
                        <?php } ?>
                        <?php if (!empty($arResult['PROPERTIES']['VOLUME_SHDD']['VALUE'])) { ?>
                            <div class="s-product-characteristics__item">
                                <div class="s-product-characteristics__item-title">SHDD‑накопитель до</div>
                                <div class="s-product-characteristics__item-text"><?=$arResult['PROPERTIES']['VOLUME_SHDD']['VALUE'];?> ТБ</div>
                            </div>
                        <?php } ?>
                        <?php if (!empty($arResult['PROPERTIES']['VOLUME_RAM']['VALUE'])) { ?>
                        <div class="s-product-characteristics__item">
                            <div class="s-product-characteristics__item-title">Оперативная память до</div>
                            <div class="s-product-characteristics__item-text"><?=$arResult['PROPERTIES']['VOLUME_RAM']['VALUE'];?> ГБ</div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="s-product-characteristics__row">
                    <div class="s-product-characteristics__row-title">БЕЗОПАСНОСТЬ И ПЕРЕДАЧА ДАННЫХ</div>
                    <div class="s-product-characteristics__row-items">
                        <?php if (!empty($arResult['PROPERTIES']['RIGHT_FIELD1']['~VALUE']['TEXT'])) { ?>
                        <div class="s-product-characteristics__item">
                            <div class="s-product-characteristics__item-title"><?=$arResult['PROPERTIES']['RIGHT_FIELD1']['~VALUE']['TEXT'];?></div>
                            <div class="s-product-characteristics__item-text"><?=$arResult['PROPERTIES']['RIGHT_VALUE1']['~VALUE']['TEXT'];?></div>
                        </div>
                        <?php } ?>
                        <?php if (!empty($arResult['PROPERTIES']['RIGHT_FIELD2']['~VALUE']['TEXT'])) { ?>
                        <div class="s-product-characteristics__item">
                            <div class="s-product-characteristics__item-title"><?=$arResult['PROPERTIES']['RIGHT_FIELD2']['~VALUE']['TEXT'];?></div>
                            <div class="s-product-characteristics__item-text"><?=$arResult['PROPERTIES']['RIGHT_VALUE2']['~VALUE']['TEXT'];?></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="s-product-characteristics__text--back">Всё под рукой</div>
            <?php if (!empty($arResult['PROPERTIES']['CHARACTERISTICS']['~VALUE']['TEXT'])) { ?>
            <div class="s-product-characteristics__bottom">
                <div class="s-product-characteristics__text">
                    <?=$arResult['PROPERTIES']['CHARACTERISTICS']['~VALUE']['TEXT'];?>
                </div>
            </div>
            <?php } else { ?>
                <div class="s-product-characteristics__bottom">
                    <div class="s-product-characteristics__text">
                        <?php if ($isAdmin) { ?>
                            Не заполнено поле "Текст характеристики" для товара: <a style="text-decoration: underline;" href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IBLOCK_ID'];?>&type=catalog&lang=ru&ID=<?=$arResult['ID'];?>&find_section_section=<?=$arResult['IBLOCK_SECTION_ID'];?>"><?=$arResult['CODE'];?></a>
                        <?php } else { ?>
                            Не заполнено поле "Текст характеристики" для товара: <?=$arResult['CODE'];?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="s-product-content" id="products-content">
    <div class="l-default">
        <div class="s-product-content__text">
            <?php if (!empty($arResult['DETAIL_TEXT'])) { ?>
                <?=$arResult['DETAIL_TEXT'];?>
            <?php } else { ?>
                <?php if ($isAdmin) { ?>
                    Не заполнено поле "Описание" для товара: <a style="text-decoration: underline;" href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IBLOCK_ID'];?>&type=catalog&lang=ru&ID=<?=$arResult['ID'];?>&find_section_section=<?=$arResult['IBLOCK_SECTION_ID'];?>"><?=$arResult['CODE'];?></a>
                <?php } else { ?>
                    Не заполнено поле "Описание" для товара: <?=$arResult['CODE'];?>
                <?php } ?>
            <?php } ?>
        </div>
        <?php if (empty($arResult['PROPERTIES']['DETAIL_IMG_BOTTOM']['VALUE'])) { ?>
            <div class="s-product-content__image"><img src="./img/product-content/cover.png" alt=""></div>
        <?php } else { ?>
            <div class="s-product-content__image"><img src="<?=$arResult['FILES'][$arResult['PROPERTIES']['DETAIL_IMG_BOTTOM']['VALUE']]['SRC'];?>" alt=""></div>
        <?php } ?>

    </div>
</section>
<?php if (!empty($arResult['PROPERTIES']['BENEFIT1_TITLE']['~VALUE']['TEXT'])) { ?>
<section class="s-product-benefits" id="products-benefits">
    <div class="l-default">
        <div class="s-product-benefits__items">
            <div class="s-product-benefits__item"  style="background-image: url('img/product-benefit/bg.png');">
                <div class="s-product-benefits__item-image">
                    <?php if (!empty($arResult['PROPERTIES']['BENEFIT1_IMG']['FILE_VALUE'])) { ?>
                        <img src="<?=$arResult['PROPERTIES']['BENEFIT1_IMG']['FILE_VALUE']['SRC'];?>" alt="">
                    <?php } else { ?>
                        <img src="./img/product-benefit/1.png" alt="">
                    <?php } ?>
                </div>
                <div class="s-product-benefits__item-info">
                    <div class="s-product-benefits__item-title"><?=$arResult['PROPERTIES']['BENEFIT1_TITLE']['~VALUE']['TEXT'];?></div>
                    <div class="s-product-benefits__item-text"><?=$arResult['PROPERTIES']['BENEFIT1_TEXT']['~VALUE']['TEXT'];?></div>
                </div>
            </div>
            <div class="s-product-benefits__item">
                <div class="s-product-benefits__item-image">
                    <?php if (!empty($arResult['PROPERTIES']['BENEFIT2_IMG']['FILE_VALUE'])) { ?>
                        <img src="<?=$arResult['PROPERTIES']['BENEFIT2_IMG']['FILE_VALUE']['SRC'];?>" alt="">
                    <?php } else { ?>
                        <img src="./img/product-benefit/2.png" alt="">
                    <?php } ?>
                </div>
                <div class="s-product-benefits__item-info">
                    <div class="s-product-benefits__item-title"><?=$arResult['PROPERTIES']['BENEFIT2_TITLE']['~VALUE']['TEXT'];?></div>
                    <div class="s-product-benefits__item-text"><?=$arResult['PROPERTIES']['BENEFIT2_TEXT']['~VALUE']['TEXT'];?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } else { ?>
    <section class="s-product-benefits" id="products-benefits">
        <div class="l-default">
            <div class="s-product-benefits__items">
                <div class="s-product-benefits__item">
                    <div class="s-product-benefits__item-image"><img src="./img/product-benefit/1.png" alt=""></div>
                    <div class="s-product-benefits__item-info">
                        <div class="s-product-benefits__item-title">БЕЗОПАСНОСТЬ И<br> ПЕРЕДАЧА ДАННЫХ</div>
                        <div class="s-product-benefits__item-text">
                            <?php if ($isAdmin) { ?>
                                <p><b>Не заполнено поле "Ячейки. 1. Текст" для товара: <a style="text-decoration: underline;" href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IBLOCK_ID'];?>&type=catalog&lang=ru&ID=<?=$arResult['ID'];?>&find_section_section=<?=$arResult['IBLOCK_SECTION_ID'];?>"><?=$arResult['CODE'];?></a></b></p>
                            <?php } else { ?>
                                <p><b>Не заполнено поле "Ячейки. 1. Текст" для товара: <?=$arResult['CODE'];?></b></p>
                            <?php } ?>
                            <p><b>Текст для примера:</b> Слот для дополнительного беспроводного адаптера. Этот же разъем может использоваться для установки АПМДЗ-модуля. Поддерживаются модули Соболь, Аккорд и другие, популярные в государственных органах Российской Федерации.</p>
                        </div>
                    </div>
                </div>
                <div class="s-product-benefits__item">
                    <div class="s-product-benefits__item-image"><img src="./img/product-benefit/2.png" alt=""></div>
                    <div class="s-product-benefits__item-info">
                        <div class="s-product-benefits__item-title">ЗАЩИТА ОТ ВОДЫ</div>
                        <div class="s-product-benefits__item-text">
                            <?php if ($isAdmin) { ?>
                                <p><b>Не заполнено поле "Ячейки. 2. Текст" для товара: <a style="text-decoration: underline;" href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IBLOCK_ID'];?>&type=catalog&lang=ru&ID=<?=$arResult['ID'];?>&find_section_section=<?=$arResult['IBLOCK_SECTION_ID'];?>"><?=$arResult['CODE'];?></a></b></p>
                            <?php } else { ?>
                                <p><b>Не заполнено поле "Ячейки. 2. Текст" для товара: <?=$arResult['CODE'];?></b></p>
                            <?php } ?>
                            <p><b>Текст для примера:</b> Клавиатура с защитой от пролития жидкостей. При этом каждая клавиша содержит индивидуальный резиновый защитный слой, предотвращающий попадание жидкости и крошек внутрь механизма.</p><p>Отзывчивый тачпад с двумя аппаратными кнопками для ретроградов.Кнопка мгновенной блокировки в верхнем правом углу.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php if ($arResult['IS_T']) { ?>
<section class="s-product-tech" id="products-tech">
    <div class="l-default">
        <h2 class="title title--h2">Технические характеристики</h2>
        <div class="s-product-tech__info">
            <?php foreach ($arResult['T_PROPERTIES'] as $property) { ?>
            <div class="s-product-tech__item">
                <div class="s-product-tech__item-name"><?=$property['NAME'];?></div>
                <div class="s-product-tech__item-values">
                    <?php if ($property['USER_TYPE'] == 'directory') { ?>
                        <?php foreach ($property['VALUE'] as $enum) { ?>
                            <span><?=$arResult['PORTS'][$enum]['UF_NAME'];?></span>
                        <?php } ?>
                    <?php } elseif ($property['MULTIPLE'] == 'N') { ?>
                        <span><?=$property['VALUE'];?></span>
                        <!--<span>8th/10th Gen Intel ® Core ™ i5</span>-->
                    <?php } else { ?>
                        <?php if (!empty($property['VALUE_ENUM'])) { ?>
                            <?php foreach ($property['VALUE_ENUM'] as $enum) { ?>
                                <span><?=$enum;?></span>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="s-product-tech__buttons">
            <?php if (count($arResult['T_PROPERTIES']) > 5) { ?>
            <button class="s-product-tech__button s-product-tech__button-more btn btn--bordered" type="button">Развернуть</button>
            <?php } ?>
            <a class="s-product-tech__button btn btn--bordered non-active" href="javascript::void(0);" download>Скачать</a>
            <a class="s-product-tech__button btn btn--bordered non-active" href="javascript::void(0);" >Информация о гарантии</a><!-- target="_blank" -->
        </div>
    </div>
</section>
<?php } ?>
<section class="s-substitution">
    <div class="l-default">
        <h2 class="title title-h2 s-substitution__title">Импортозамещение</h2>
        <div class="s-substitution__content">
            <div class="s-substitution__content-item">
                <div class="s-substitution__item-text">Разрабатываем и производим высокотехнологичное российское оборудование, опираясь на опыт лучших мировых производителей.</div>
            </div>
            <div class="s-substitution__content-item">
                <div class="s-substitution__item-count">
                    <div class="s-substitution__count-container">
                        <div class="s-substitution__count-number">26</div>
                        <div class="s-substitution__count-plus">+</div>
                    </div>
                    <div class="s-substitution__count-text">наименований</div>
                </div>
            </div>
            <div class="s-substitution__content-item">
                <div class="s-substitution__item-minprom">
                    <div class="s-substitution__minprom-logo">
                        <svg class="ico ico-color-minlogo">
                            <use xlink:href="img/sprite-color.svg#ico-color-minlogo"></use>
                        </svg>
                    </div>
                    <div class="s-substitution__minprom-text">в&nbsp;едином реестре российской радиоэлектронной продукции Минпромторга России.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($arResult['PROPERTIES']['VIDEO_LINK']['VALUE'])) { ?>
<div class="s-product-video" id="product-video">
    <div class="l-default">
        <div class="s-product-video__wrapper">
            <div class="s-product-video__year"><?=$arResult['PROPERTIES']['VIDEO_YEAR']['VALUE'];?></div>
            <div class="s-product-video__left"><a class="s-product-video__link" href="<?=$arResult['PROPERTIES']['VIDEO_LINK']['VALUE'];?>" data-fancybox>
                    <div class="s-product-video__link-text">Посмотрите обзор </div>
                    <div class="s-product-video__link-icon"><img src="img/svg/play.svg" alt=""></div></a></div>
            <div class="s-product-video__right">
                <div class="s-product-video__notebook">
                    <div class="s-product-video__notebook-img">
                        <picture>
                            <img src="img/product-video/1.png" alt=""/>
                        </picture>
                    </div><a class="s-product-video__notebook-monitor" href="https://www.youtube.com/watch?v=JK0_bzukdX0" data-fancybox></a>
                </div>
            </div>
        </div>
        <div class="s-product-video__text">
            <div class="s-product-video__quote">
                <svg class="ico ico-mono-quote">
                    <use xlink:href="img/sprite-mono.svg#ico-mono-quote"></use>
                </svg>
            </div>
            <?php if (!empty($arResult['PROPERTIES']['VIDEO_TEXT']['~VALUE']['TEXT'])) { ?>
            <div class="s-product-video__text-content">
                <?=$arResult['PROPERTIES']['VIDEO_TEXT']['~VALUE']['TEXT'];?>
            </div>
            <?php } ?>
            <div class="s-product-video__quote">
                <svg class="ico ico-mono-quote">
                    <use xlink:href="img/sprite-mono.svg#ico-mono-quote"></use>
                </svg>
            </div>
        </div>
    </div>
    <div class="s-product-video__noise">
        <picture>
            <source srcset="img/product-video/noise.webp" type="image/webp"/>
            <source srcset="img/product-video/noise.png" type="image/png"/><img src="img/product-video/noise.png" alt=""/>
        </picture>
    </div>
</div>
<?php } ?>
<?php if ($arResult['IS_FILES']) { ?>
<div class="s-product-docs" id="product-docs">
    <div class="s-product-docs__back s-product-docs__back-left">
        <picture>
            <source srcset="img/product-docs/1.webp" type="image/webp"/>
            <source srcset="img/product-docs/1.jpg" type="image/jpg"/><img src="img/product-docs/1.jpg" alt=""/>
        </picture>
    </div>
    <div class="s-product-docs__wrapper">
        <div class="l-content">
            <div class="s-product-docs__info">
                <div class="s-product-docs__tabs">
                    <?php $tabIsActive = false; ?>
                    <?php if (!empty($arResult['PROPERTIES']['M_DOCS']['VALUE'])) { ?>
                        <button class="s-product-docs__tab is-active" data-tab-id="productDocs_<?=$arResult['PROPERTIES']['M_DOCS']['ID'];?>">Документация</button>
                        <?php $tabIsActive = true; ?>
                    <?php } ?>
                    <?php if (!empty($arResult['PROPERTIES']['M_SERT']['VALUE'])) { ?>
                        <button class="s-product-docs__tab <?=(!$tabIsActive ? 'is-active' : '');?>" data-tab-id="productDocs_<?=$arResult['PROPERTIES']['M_SERT']['ID'];?>">Сертификаты</button>
                        <?php $tabIsActive = true; ?>
                    <?php } ?>
                    <?php if (!empty($arResult['PROPERTIES']['M_DRIVERS']['VALUE'])) { ?>
                        <button class="s-product-docs__tab <?=(!$tabIsActive ? 'is-active' : '');?>" data-tab-id="productDocs_<?=$arResult['PROPERTIES']['M_DRIVERS']['ID'];?>">Драйвера и ПО</button>
                        <?php $tabIsActive = true; ?>
                    <?php } ?>
                </div>
                <div class="s-product-docs__contents">
                    <?php $contentIsActive = false; ?>
                    <?php if (!empty($arResult['PROPERTIES']['M_DOCS']['VALUE'])) { ?>
                        <div class="s-product-docs__content is-active" id="productDocs_<?=$arResult['PROPERTIES']['M_DOCS']['ID'];?>">
                            <div class="s-product-docs__content-wrapper">
                                <?php foreach($arResult['PROPERTIES']['M_DOCS']['VALUE'] as $key => $fileId) { $file = $arResult['FILES'][$fileId]; ?>
                                <div class="s-product-docs__item">
                                    <div class="s-product-docs__item-col">
                                        <div class="s-product-docs__item-title">
                                            <?php if (!empty($arResult['PROPERTIES']['M_DOCS']['DESCRIPTION'][$key])) { ?>
                                            <?=$arResult['PROPERTIES']['M_DOCS']['DESCRIPTION'][$key];?>
                                            <?php } else { ?>
                                            <?=$file['ORIGINAL_NAME'];?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="s-product-docs__item-col">
                                        <div class="s-product-docs__item-info"><a class="s-product-docs__item-download" href="<?=$file['SRC'];?>" download>
                                                <svg class="ico ico-mono-icon-download">
                                                    <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                                </svg></a>
                                            <div class="s-product-docs__item-size"><?=$file['MB_SIZE'];?> МБ</div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php $contentIsActive = true; ?>
                    <?php } ?>
                    <?php if (!empty($arResult['PROPERTIES']['M_SERT']['VALUE'])) { ?>
                        <div class="s-product-docs__content <?=(!$contentIsActive ? 'is-active' : '');?>" id="productDocs_<?=$arResult['PROPERTIES']['M_SERT']['ID'];?>">
                        <div class="s-product-docs__content-wrapper">
                            <?php foreach($arResult['PROPERTIES']['M_SERT']['VALUE'] as $key => $fileId) { $file = $arResult['FILES'][$fileId]; ?>
                            <div class="s-product-docs__item">
                                <div class="s-product-docs__item-col">
                                    <div class="s-product-docs__item-title"><?=$arResult['PROPERTIES']['M_SERT']['DESCRIPTION'][$key];?></div>
                                </div>
                                <div class="s-product-docs__item-col">
                                    <div class="s-product-docs__item-info"><a class="s-product-docs__item-download" href="<?=$file['SRC'];?>" download>
                                            <svg class="ico ico-mono-icon-download">
                                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                            </svg></a>
                                        <div class="s-product-docs__item-size"><?=$file['MB_SIZE'];?> МБ</div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                        <?php $contentIsActive = true; ?>
                    <?php } ?>
                    <?php if (!empty($arResult['PROPERTIES']['M_DRIVERS']['VALUE'])) { ?>
                        <div class="s-product-docs__content <?=(!$contentIsActive ? 'is-active' : '');?>" id="productDocs_<?=$arResult['PROPERTIES']['M_DRIVERS']['ID'];?>">
                        <div class="s-product-docs__content-wrapper">
                            <?php foreach($arResult['PROPERTIES']['M_DRIVERS']['VALUE'] as $key => $fileId) { $file = $arResult['FILES'][$fileId]; ?>
                            <div class="s-product-docs__item">
                                <div class="s-product-docs__item-col">
                                    <div class="s-product-docs__item-title"><?=$arResult['PROPERTIES']['M_DRIVERS']['DESCRIPTION'][$key];?></div>
                                </div>
                                <div class="s-product-docs__item-col">
                                    <div class="s-product-docs__item-info"><a class="s-product-docs__item-download" href="<?=$file['SRC'];?>" download>
                                            <svg class="ico ico-mono-icon-download">
                                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                            </svg></a>
                                        <div class="s-product-docs__item-size"><?=$file['MB_SIZE'];?> МБ</div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                        <?php $contentIsActive = true; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="s-product-docs__back s-product-docs__back-right">
        <picture>
            <source srcset="img/product-docs/2.webp" type="image/webp"/>
            <source srcset="img/product-docs/2.jpg" type="image/jpg"/><img src="img/product-docs/2.jpg" alt=""/>
        </picture>
    </div>
</div>
<?php } ?>
<section class="s-partners">
    <div class="l-default">
        <h2 class="title title--h2 text-center">Где купить ?</h2>
        <div class="s-partners__items s-partners__type-two">
            <div class="s-partners__item"><img src="img/svg/logos/3logic.svg" alt=""></div>
            <div class="s-partners__item"><img src="img/svg/logos/elbrus.svg" alt=""></div>
            <div class="s-partners__item"><img src="img/svg/logos/basealt.svg" alt=""></div>
            <div class="s-partners__item"><img src="img/svg/logos/astralinux.svg" alt=""></div>
            <div class="s-partners__item"><img src="img/svg/logos/code.svg" alt=""></div>
            <div class="s-partners__item s-partners__btn-wrap"><a class="s-partners__btn" href="mailto:mail@mail.com">Стать партнером</a></div>
        </div>
    </div>
</section>
<section class="s-feedback">
    <div class="s-feedback__content">
        <div class="s-feedback__content-top">
            <div class="l-default">
                <div class="s-feedback__item">
                    <div class="s-feedback__item-text">Остались вопросы? Свяжитесь с нами</div>
                </div>
                <div class="s-feedback__item">
                    <a class="s-feedback__item-btn" href="mailto:sale@graviton.ru"> Связаться с нами</a>
                </div>
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
</section>
