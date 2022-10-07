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

                    if (false === $arSection['PICTURE'])
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
                    ?>
                    <div class="swiper-slide s-top-categories__slide">
                        <a class="s-top-categories__item" href="<?=$arSection['SECTION_PAGE_URL']; ?>">
                            <div class="s-top-categories__item-img">
                                <picture>
                                    <source data-srcset="<?=$arSection['PICTURE']['SRC']; ?>" type="image/jpg"/><img class="lazy" data-src="<?=$arSection['PICTURE']['SRC']; ?>" alt=""/>
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
    <div class="l-default">
        <div class="s-feedback__content">
            <div class="s-feedback__content-top">
                <div class="s-feedback__item">
                    <div class="s-feedback__item-text">Остались вопросы? Свяжитесь с нами</div>
                </div>
                <div class="s-feedback__item"><a class="s-feedback__item-btn" href="mailto:sale@graviton.ru"> Связаться с нами</a></div>
            </div>
            <div class="s-feedback__content-bottom">
                <div class="s-feedback__item">
                    <div class="s-feedback__item-note">*Вышеприведенные характеристики являются теоретическими величинами и зависят от дизайна продукта. Для предоставления точной информации об устройствах и для обеспечения ее соответствия с харакетристиками и функциями фактических продуктов компания Гравитон может вносить изменения в режиме реального времени. Сведения о продукции могут быть изменены без предварительного уведомления.</div>
                </div>
            </div>
        </div>
    </div>
</section>
