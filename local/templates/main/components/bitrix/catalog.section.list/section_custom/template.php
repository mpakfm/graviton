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

$isAdmin = $USER->IsAdmin();

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$partners = [
    "IBLOCK_TYPE"        => "content",
    "IBLOCKS"            => ["partners"],
    "SECTIONS"           => ["header"],
    "FIELD_CODE"         => ["ID", "CODE", "NAME", "PREVIEW_PICTURE"],
    "SORT_BY1"           => "SORT",
    "SORT_ORDER1"        => "ASC",
    "SORT_BY2"           => "NAME",
    "SORT_ORDER2"        => "ASC",
    "TITLE"              => "Меню",
    "CACHE_TYPE"         => "Y",
    "CACHE_TIME"         => "3600",
    "CACHE_GROUPS"       => "Y",
];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

if (!$arParams['SECTION_ACTIVE_CODE']) {
    $arParams['SECTION_ACTIVE_CODE'] = $arResult['SECTIONS'][0]['CODE'];
}

$images      = [];
$imagesIds   = [];
$lines       = [];
$activeChild = [];
// Если мы в родительской секции
if ($arResult['SECTION']['DEPTH_LEVEL'] == 1) {
    foreach ($arResult['SECTIONS'] as &$section) {
        $innerFilter = [
            'ACTIVE' => 'Y',
            'GLOBAL_ACTIVE' => 'Y',
            'SECTION_ID' => $section['ID'],
            'IBLOCK_ID' => $section['IBLOCK_ID']
        ];
        $stmt = CIBlockSection::GetList(['sort' => 'asc'], $innerFilter, false, ["UF_ADVERT", "UF_SCREEN", "UF_SUBTITLE"]);
        if ($stmt->SelectedRowsCount()) {
            $section['CHILDREN'] = [];
            while ($item = $stmt->Fetch()) {
                $item['PRODUCTS'] = [];
                $productsFilter   = [
                    'ACTIVE' => 'Y',
                    'IBLOCK_SECTION_ID' => $item['ID'],
                    'IBLOCK_ID' => $section['IBLOCK_ID']
                ];
                $stmtProducts = CIBlockElement::GetList(['sort' => 'asc'], $productsFilter, false, false, ['ID', 'CODE', 'NAME', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'PROPERTY_SUBTITLE']);

                while ($el = $stmtProducts->Fetch()) {
                    if ($el['PREVIEW_PICTURE']) {
                        $imagesIds[] = $el['PREVIEW_PICTURE'];
                    }
                    $el['URL'] = '/catalog/' . $arResult['SECTION']['CODE'] . '/' . $section['CODE'] . '/' . $item['CODE'] . '/' . $el['CODE'];
                    $item['PRODUCTS'][] = $el;
                }
                $section['CHILDREN'][] = $item;
            }
        }
        if ($section['CODE'] == $arParams['SECTION_ACTIVE_CODE']) {
            $activeChild = $section;
        }
    }
}
if (!empty($imagesIds)) {
    $stmtImg = CFile::GetList([], ['@ID' => $imagesIds]);
    while($img = $stmtImg->Fetch()) {
        $img['SRC'] = CFile::GetFileSRC($img);
        $images[$img['ID']] = $img;
    }
}

?>
<section class="s-top-categories">
    <div class="l-default">
        <div class="s-top-categories__wrapper">
            <div class="s-top-categories__slider">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($arResult['SECTIONS'] as &$arSection)
                    {
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                    if (false === $arSection['PICTURE']) {
                        $arSection['PICTURE'] = array(
                        'SRC' => $arCurView['EMPTY_IMG'],
                        'ALT' => (
                        '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                        : $arSection["NAME"]
                        ),
                        'TITLE' => (
                        '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                        : $arSection["NAME"]
                        )
                        );
                    }
                    ?>
                    <div class="swiper-slide s-top-categories__slide <?=($arSection['CODE'] == $arParams['SECTION_ACTIVE_CODE'] ? 'active-categories' : '');?>">
                        <a class="s-top-categories__item" href="/catalog/<?=$arResult['SECTION']['CODE']; ?>/<?=$arSection['CODE']; ?>">
                            <div class="s-top-categories__item-img">
                                <picture>
                                    <img src="<?=$arSection['PICTURE']['SRC']; ?>" alt=""/>
                                </picture>
                            </div>
                            <div class="s-top-categories__item-title"><?=$arSection['NAME']; ?></div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$chain = \Library\Tools\Breadcrumb::$chain;
$activeLine = $activeChild['CHILDREN'][0]['CODE'];
if (array_key_exists(3, $chain)) {
    $activeLine = $chain[3]['code'];
}
?>
<section class="s-rulers">
    <div class="l-default">
        <div class="s-rulers__tabs">
            <?php foreach ($activeChild['CHILDREN'] as $key => $line) { ?>
            <div class="s-rulers__tab  <?=($activeLine == $line['CODE'] ? 'is-active' : '');?>"><a class="s-rulers__tab-link" data-rules-index="<?=$line['CODE'];?>">
                    <div class="s-rulers__tab-title"><?=$line['NAME'];?></div></a></div>
            <?php } ?>
        </div>
    </div>
</section>

<?php foreach ($activeChild['CHILDREN'] as $key => $line) { ?>
<div class="s-rulers__tab-content <?=($activeLine == $line['CODE'] ? 'is-active' : '');?> <?=$key;?>" id="<?=$line['CODE'];?>">
    <div class="s-rulers__content">
        <section class="s-advertising" style="background-image: url(img/back/back.jpg);">
            <div class="l-default">
                <h2 class="title s-advertising__title" data-rules="rules_0">
                    <?php if (!$arResult['SECTION']['UF_ADVERT']) {?>
                            <?php if ($isAdmin) { ?>
                            Не заполнено поле "Строка в фоне раздела" для раздела: <a style="text-decoration: underline;" href="/bitrix/admin/iblock_section_edit.php?IBLOCK_ID=<?=$arResult['SECTION']['IBLOCK_ID'];?>&type=catalog&lang=ru&ID=<?=$arResult['SECTION']['ID'];?>"><?=$arResult['SECTION']['CODE'];?></a>
                            <?php } else { ?>
                            Не заполнено поле "Строка в фоне раздела" для раздела: <?=$arResult['SECTION']['CODE'];?>
                            <?php } ?>
                    <? } else { ?>
                    <?=htmlspecialchars_decode($arResult['SECTION']['UF_ADVERT']);?>
                    <?php } ?>
                </h2>
            </div>
        </section>
        <section class="s-goods">
            <div class="l-default">
                <div class="content-active">
                    <h2 class="title title--h2 s-goods__title">
                        <?php if (!$line['UF_SUBTITLE']) {?>
                            <?php if ($isAdmin) { ?>
                                Не заполнено поле "Подзаголовок" для раздела: <a style="text-decoration: underline;" href="/bitrix/admin/iblock_section_edit.php?IBLOCK_ID=<?=$line['IBLOCK_ID'];?>&type=catalog&lang=ru&ID=<?=$line['ID'];?>"><?=$line['CODE'];?></a>
                            <?php } else { ?>
                                Не заполнено поле "Подзаголовок" для раздела: <?=$line['CODE'];?>
                            <?php } ?>
                        <? } else { ?>
                        <?=$line['UF_SUBTITLE'];?>
                        <?php } ?>
                    </h2>
                    <div class="s-goods__text">
                        <?php if (!$line['DESCRIPTION']) {?>
                            <?php if ($isAdmin) { ?>
                                Не заполнено поле "Описание" для раздела: <a style="text-decoration: underline;" href="/bitrix/admin/iblock_section_edit.php?IBLOCK_ID=<?=$line['IBLOCK_ID'];?>&type=catalog&lang=ru&ID=<?=$line['ID'];?>"><?=$line['CODE'];?></a>
                            <?php } else { ?>
                                Не заполнено поле "Описание" для раздела: <?=$line['CODE'];?>
                            <?php } ?>
                        <? } else { ?>
                        <?=$line['DESCRIPTION'];?>
                        <?php } ?>
                        <!--
                        <p class="s-goods__text--prefix">Многочисленные порты ввода‑вывода. Три полноразмерных USB 3.2, полноразмерный HDMI 1.4, VGA, USB-C с поддержкой передачи видеосигнала и подзарядки, гигабитный Ethernet, разъем для наушников и кард-ридер.</p>
                        <p class="s-goods__text--prefix">По USB-C очень даже можно, там ограничение 4096х2364 точек с частотой обновления 60 Гц. И, кстати, с внешним монитором</p>
                        -->
                    </div>
                    <div class="s-goods__items">
                        <?php foreach($line['PRODUCTS'] as $product) { ?>
                        <div class="s-goods__item">
                            <div class="s-goods__item-info">
                                <div class="s-goods__item-img">
                                    <?php if ($product['PREVIEW_PICTURE'] && $images[$product['PREVIEW_PICTURE']]) { ?>
                                        <img src="<?=$images[$product['PREVIEW_PICTURE']]['SRC'];?>" alt=""/>
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
                                <a class="s-goods__item-buy js-item-by" data-name="<?=$product['NAME'];?>" data-img="<?=$images[$product['PREVIEW_PICTURE']]['SRC'];?>" href="#popup-categories" data-fancybox>Где купить</a>
                            </div>
                        </div>
                        <?php } $upKey = $key + 1; ?>
                        <?php if (array_key_exists($upKey, $activeChild['CHILDREN'])) { ?>
                            <?php if (!empty($activeChild['CHILDREN'][$upKey]['PRODUCTS'])) { $product = $activeChild['CHILDREN'][$upKey]['PRODUCTS'][0]; ?>
                                <div class="s-goods__item last-item">
                                    <div class="s-goods__item-info">
                                        <div class="s-goods__item-img">
                                            <?php if ($product['PREVIEW_PICTURE'] && $images[$product['PREVIEW_PICTURE']]) { ?>
                                                <img src="<?=$images[$product['PREVIEW_PICTURE']]['SRC'];?>" alt=""/>
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
                                        <a class="s-goods__item-buy"  href="#popup-categories" data-fancybox>Где купить</a>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="s-solutions" style="background-image: url(img/solutions/back_tablet.png);">
            <div class="l-default">
                <div class="content-active" data-rules="rules_0">
                    <h2 class="title title--h2 s-solutions__title"><?=$arResult['SECTION']['NAME'];?></h2>
                    <?php if (!$arResult['SECTION']['DESCRIPTION']) {?>
                        <?php if ($isAdmin) { ?>
                            Не заполнено поле "Описание" для раздела: <a style="text-decoration: underline;" href="/bitrix/admin/iblock_section_edit.php?IBLOCK_ID=<?=$arResult['SECTION']['IBLOCK_ID'];?>&type=catalog&lang=ru&ID=<?=$arResult['SECTION']['ID'];?>"><?=$arResult['SECTION']['CODE'];?></a>
                        <?php } else { ?>
                            Не заполнено поле "Описание" для раздела: <?=$arResult['SECTION']['CODE'];?>
                        <?php } ?>
                    <? } else { ?>
                        <?=$arResult['SECTION']['DESCRIPTION'];?>
                    <?php } ?>
                    <?=$arResult['SECTION']['DESCRIPTION'];?>
                    <!--
                    <p class="s-solutions__text">Сегодня на рынке представлены три основных вида ноутбуков — это настольные, ультратонкие и ноутбуки-трансформеры. Все они заточены под выполнение разных задач, поэтому покупателю стоит быть внимательнее. Например, трансформеры чаще всего поставляются с сенсорным экраном, поэтому управлять ими можно и пальцами, и с помощью обычной клавиатуры. Чаще всего они работают на операционной системе Windows 10, однако могут иметь и две ОС: например, Windows и Android. А ультрабуки отличаются минимальной толщиной и легкостью — они весят до полутора килограммов, их можно легко взять с собой, но они не отличаются высокой производительностью.</p>
                    <p class="s-solutions__text">Поэтому для начала пользователю важно определить, для каких задач подойдет та или иная модель ноутбука и каким набором технических характеристик должно в итоге обладать устройство.</p>
                    <p class="s-solutions__text--last">Сегодня на рынке представлены три основных вида ноутбуков — это настольные, ультратонкие и ноутбуки-трансформеры. Все они заточены под выполнение разных задач, поэтому покупателю стоит быть внимательнее. Например, трансформеры чаще всего поставляются с сенсорным экраном, поэтому управлять ими можно и пальцами, и с помощью обычной клавиатуры. Чаще всего они работают на операционной системе Windows 10, однако могут иметь и две ОС: например, Windows и Android. А ультрабуки отличаются минимальной толщиной и легкостью — они весят до полутора килограммов, их можно легко взять с собой, но они не отличаются высокой производительностью.</p>
                    <div class="s-solutions__text--short">
                        <p class="s-solutions__text">Тут будет текст</p>
                        <p class="s-solutions__text">Тут будет текст</p>
                        <p class="s-solutions__text">Тут будет текст</p>
                    </div>
                    -->
                </div>
            </div>
        </section>
    </div>
</div>
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

<?$APPLICATION->IncludeComponent("mpakfm:news.line", "catalog.partners", $partners);?>

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