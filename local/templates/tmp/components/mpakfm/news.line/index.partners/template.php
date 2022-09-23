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
<div class="partners">
<?php foreach ($arResult["ITEMS"] as $arItem) { ?>
    <div class="partner-preview">
        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
    </div>
<?php } ?>
</div>
