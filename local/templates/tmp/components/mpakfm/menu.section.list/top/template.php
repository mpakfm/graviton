<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    27.09.2022
 * Time:    3:16
 */
/** @var array $arResult */

//\Mpakfm\Printu::obj($arResult)->title('$arResult')->response('html');

$depth = 0;

?>
<div style="color: darkblue;">
<?php foreach ($arResult['SECTIONS'] as $section) { ?>
    <?php
    $margin   = $section['DEPTH_LEVEL'] * 10;
    $marginUl = $margin + 20;
    ?>

    <div style="margin-left: <?=$margin;?>px;">[<?=$section['ID']; ?>] <?=$section['NAME']; ?> (<?=$section['SORT'];?>)</div>
    <?php if (array_key_exists($section['ID'], $arResult['ELEMENTS'])) { ?>
        <ul style="margin: 10px 0px 15px <?=$marginUl;?>px;">
            <?php foreach ($arResult['ELEMENTS'][$section['ID']] as $el) { ?>
                <li><a href="<?=$el['PROPERTY_LINK_VALUE'];?>"><?=$el['NAME'];?> (<?=$el['SORT'];?>)</a></li>
            <?php } ?>
        </ul>
    <?php } ?>
<?php } ?>
<?php if (array_key_exists($arResult['SECTION']['ID'], $arResult['ELEMENTS'])) { ?>
    <?php
    $margin   = 0;
    $marginUl = $margin + 20;
    ?>
    <ul style="margin: 10px 0px 15px <?=$marginUl;?>px;">
        <?php foreach ($arResult['ELEMENTS'][$arResult['SECTION']['ID']] as $el) { ?>
            <li><a href="<?=$el['PROPERTY_LINK_VALUE'];?>"><?=$el['NAME'];?></a></li>
        <?php } ?>
    </ul>
<?php } ?>
</div>
