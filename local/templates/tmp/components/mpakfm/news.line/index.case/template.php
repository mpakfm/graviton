<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    13.09.2022
 * Time:    2:19
 */
/** @var array $arResult */
$frame = $this->createFrame()->begin();
?>
<div>
<?php foreach ($arResult["ITEMS"] as $arItem) { ?>
    <div class="case-preview">
        <?php if (!empty($arItem['PREVIEW_PICTURE'])) { ?>
            <div><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>"></div>
        <?php } ?>
        <h3><a href="javascript:void(0);"><?=$arItem["NAME"]?></a></h3>
        <h4><?=$arItem["PROPERTY_SUB_TITLE_VALUE"]?></h4>
        <div class="case-preview-text">
        <?php if (!empty($arItem['PREVIEW_TEXT'])) { ?>
            <?=$arItem['PREVIEW_TEXT'];?>
        <?php } ?>
        </div>
    </div>
<?php } ?>
</div>
