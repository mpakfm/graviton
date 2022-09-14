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
    <div style="float: left; margin: 20px;"><a href="<?=$arItem["PROPERTY_LINK_VALUE"]?>"><?=$arItem["NAME"]?></a></div>
<?php } ?>
</div>
<div style="clear:both;"></div>
