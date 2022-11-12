<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    24.09.2022
 * Time:    20:56
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
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
$this->setFrameMode(true);

?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

    });
    //js-search
</script>
<div class="search">
    <form class="form form--search" action="<?=$arResult["FORM_ACTION"]?>">
        <div class="form__input">
            <div class="form__input-icon">
                <svg class="ico ico-mono-search">
                    <use xlink:href="img/sprite-mono.svg#ico-mono-search"></use>
                </svg>
            </div>
            <input id="js-search-input" style="color: #ceced0;" type="text" name="q" placeholder="Ноутбук" <?=(array_key_exists('q', $_REQUEST) && !empty($_REQUEST['q']) ? 'value="' . $_REQUEST['q'] . '"' : '');?> autocomplete="off">
            <?php if($arParams["USE_SUGGEST"] === "Y") { ?>
                <div class="search__result">
                    <div class="search__result-title">Популярные запросы</div>
                    <div class="search__result-items">
                        <?php foreach ($arResult['SUGGEST'] as $phrase) { ?>
                        <a class="search__result-item js-search" href="/search?q=<?=$phrase;?>&s=&spell=Y"><?=$phrase;?></a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="form__submit">
            <button class="btn btn--search" type="submit" name="s" >
                <div class="form__submit-text">Поиск</div>
                <div class="form__submit-icon">
                    <svg class="ico ico-mono-search">
                        <use xlink:href="img/sprite-mono.svg#ico-mono-search"></use>
                    </svg>
                </div>
            </button>
        </div>
    </form>
</div>
