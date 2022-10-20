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

$stmt = CIBlockSection::GetList(['sort' => 'asc'], ['IBLOCK_ID' => $arParams['IBLOCK_ID']], false, ['ID', 'CODE', 'NAME', 'IBLOCK_SECTION_ID']);
$sections = [];
while($section = $stmt->Fetch()) {
    $sections[] = $section;
}

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
<section class="news" style="background-image: url('img/news/back.jpg');">
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
            <div class="news__container">
                <div class="news-items">
                    <?php } ?>
                    <?php foreach($arResult["ITEMS"] as $key => $arItem) { ?>
                        <?
                            if (strpos($arItem['ACTIVE_FROM'], ' ') !== false) {
                                $dt = date_create_from_format('d.m.Y H:i:s', $arItem['ACTIVE_FROM']);
                            } else {
                                $dt = date_create_from_format('d.m.Y', $arItem['ACTIVE_FROM']);
                            }
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" <?php if ($arParams['AJAX_MODE'] == 'Y' && $key == 0) { ?>data-pageurl="<?=$arResult["NAV_STRING"]?>"<?php } ?>>
                            <div class="news-item__content--preview">
                                <div class="preview__date">
                                    <?php if ($dt) {?>
                                        <span class="preview__date--day"><?=$dt->format('d');?></span>
                                        <p class="preview__date--month"><?=FormatDate('F', $dt->format('U'));?></p>
                                    <?php } ?>
                                </div>

                                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                                    <div class="preview__img">
                                        <picture>
                                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" loading="lazy" />
                                        </picture>
                                    </div>
                                <?endif?>
                                <a class="preview__more" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                                    <div class="preview__more--btn">Подробнее</div>
                                    <div class="preview__more--arrow"><svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="news-item__content--text">
                                <div class="text__title"><?echo $arItem["NAME"]?></div>
                                <div class="text__prefix"><?echo $arItem["PREVIEW_TEXT"]?></div>
                                <a class="text__more" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                                    <div class="text__more--btn">Подробнее</div>
                                    <div class="text__more--arrow">
                                        <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </a>
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
<?php } ?>
