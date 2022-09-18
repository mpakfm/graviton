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
$this->setFrameMode(true);
?>
<div class="news-line">
	<?php foreach ($arResult["ITEMS"] as $arItem) { ?>
		<?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
        $arPhotoSmall = null;
        if (array_key_exists('PREVIEW_PICTURE', $arItem) && !empty($arItem['PREVIEW_PICTURE'])) {
            $arPhotoSmall = CFile::ResizeImageGet(
                $arItem["PREVIEW_PICTURE"]["ID"],
                [
                    'width'  => 300,
                    'height' => 200,
                ],
                BX_RESIZE_IMAGE_PROPORTIONALDETAIL_PICTURE,
                [
                    "name"      => "sharpen",
                    "precision" => 0,
                ]
            );
        }
        ?>
		<div class="small" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?>&nbsp;&nbsp;</span>
            <?php if ($arPhotoSmall) { ?><img src="<?=$arPhotoSmall['src'];?>"><?php } ?>
            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
        </div>
	<?php } ?>
</div>
