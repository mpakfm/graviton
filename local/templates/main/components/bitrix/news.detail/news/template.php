<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    03.10.2022
 * Time:    5:34
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

// @todo: времянка, передать определение секций либо в компонент либо в result_modifier
$stmt     = CIBlockSection::GetList(['sort' => 'asc'], ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'CNT_ACTIVE' => 'Y'], true, ['ID', 'CODE', 'NAME', 'IBLOCK_SECTION_ID']);
$sections = [];
while($section = $stmt->Fetch()) {
    if ($section['ELEMENT_CNT']) {
        $sections[] = $section;
    }
}

?>
<section class="news-detail" style="background-image: url(img/news/back.jpg)">
    <div class="tabs">
        <div class="l-default">
            <div class="tabs__content">
                <?php foreach($sections as $section) { ?>
                <a class="tabs__content-item" href="/news/<?=$section['CODE'];?>"><?=$section['NAME'];?></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="l-default">
        <div class="l-content">
            <div class="news-detail__container">
                <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                    <div class="news-detail__date">
                        <div class="news-detail__date--day"><?=$arResult["DISPLAY_ACTIVE_FROM_DAY"]?> </div>
                        <div class="news-detail__date--month"><?=$arResult["DISPLAY_ACTIVE_FROM_MONTH"]?></div>
                    </div>
                <?endif;?>
                <div class="news-detail__content">
                    <div class="news-detail__content--img">
                        <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                            <div class="news-detail__topic">
                                <div class="news-detail__topic--day"><?=$arResult["DISPLAY_ACTIVE_FROM_DAY"]?> </div>
                                <div class="news-detail__topic--month"><?=$arResult["DISPLAY_ACTIVE_FROM_MONTH"]?></div>
                            </div>
                        <?endif;?>
                        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                            <picture>
                                <source data-srcset="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" type="image/jpg"/>
                                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="undefined"/>
                            </picture>
                        <?endif?>
                    </div>
                    <?php if ($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]) { ?>
                    <div class="news-detail__content--title"><?=$arResult["NAME"]?></div>
                    <?php } ?>
                    <div class="news-detail__content--text">
                        <?if($arResult["DETAIL_TEXT"] <> ''):?>
                            <?echo $arResult["DETAIL_TEXT"];?>
                        <?endif?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
