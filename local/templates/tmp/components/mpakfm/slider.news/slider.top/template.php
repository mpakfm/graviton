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
<div style="display: block; clear: both;">
    <p>События</p>
    <?php foreach ($arResult['EVENTS'] as $arItem) { ?>
        <div style="float: left; margin: 20px;">
            <a href="javascript:void(0);"><?=$arItem["PROPERTY_TOP_TITLE_VALUE"]?></a>
            <p><?=$arItem["PROPERTY_TOP_DATE_VALUE"]?></p>
            <?php if ($arItem["PROPERTY_TOP_PLACE_VALUE"]) { ?>
            <p><?=$arItem["PROPERTY_TOP_PLACE_VALUE"]?></p>
            <?php } ?>
        </div>
    <?php } ?>
</div>
<div style="display: block; clear: both;">
    <p>Новости</p>
    <?php foreach ($arResult['NEWS'] as $arItem) { ?>
        <div style="float: left; margin: 20px;">
            <a href="javascript:void(0);"><?=$arItem["PROPERTY_TOP_TITLE_VALUE"]?></a>
            <p>Дата: <?=$arItem["PROPERTY_TOP_DATE_VALUE"]?></p>
        </div>
    <?php } ?>
</div>
<div style="clear:both;"></div>
