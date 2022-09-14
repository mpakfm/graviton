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
<?php foreach ($arResult["ITEMS"] as $arItem) { ?>
    <div><a href="<?=$arItem["PROPERTY_LINK_VALUE"]?>"><?=$arItem["NAME"]?></a></div>
<?php } ?>
