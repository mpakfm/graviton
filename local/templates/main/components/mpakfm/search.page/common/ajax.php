<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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

?>

<div class="search__cards">
<?php foreach ($arResult["SEARCH"] as $arItem) { ?>
    <a href="<?echo $arItem["URL"]?>" class="search-card search-card_event">
        <div class="search-list-card__tags">
            <?php foreach ($arItem['TAGS'] as $tag) { ?>
                <div class="search-list-card__tags-item button button_white"><?=$tag['TAG_NAME'];?></div>
            <?php } ?>
        </div><!-- search-card__tags -->
        <div class="search-card__img">
            <img data-srcset="<?= $arItem['PROPERTIES']['PREVIEW_PICTURE'] ?>" class="lazyload">
        </div><!-- search-card__img -->
        <div class="search-card__title"><?= $arItem["TITLE_FORMATED"]?></div>
        <div class="search-card__info"><?= $arItem['PROPERTIES']['DATE']; ?><?=($arItem['PROPERTIES']['PROPERTY_DATE_TOP_VALUE'] != '' ? ' | ' . $arItem['PROPERTIES']['PROPERTY_DATE_TOP_VALUE'] : '');?></div>
    </a>
<?php } ?>
</div><!-- search__cards -->
<?php if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") { ?>
    <?= $arResult["NAV_STRING"];?>
<?php } ?>
