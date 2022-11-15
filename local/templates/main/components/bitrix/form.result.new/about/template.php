<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<section class="s-about-contacts">
    <div class="s-about-contacts__top">
        <div class="l-default">
            <div class="s-about-contacts__title"><?=$arResult['FORM_TITLE'];?></div>
            <div class="s-about-contacts__subtitle"><?=$arResult['FORM_DESCRIPTION'];?></div>
        </div>
        <div class="s-about-contacts__text">нам о нас</div>
    </div>
    <div class="l-default">

        <?=$arResult['FORM_HEADER'];?>

            <div class="form__columns">
                <?php foreach($arResult['ITEMS'] as $item) { ?>
                    <?php
                    $keys = array_keys($item['ANSWERS']);
                    switch($item['COMMENTS']) {
                        case"company":
                            foreach ($item['ANSWERS'] as $ans) {
                                ?>
                                <div class="form__column">
                                    <div class="form__textarea">
                                        <label for="form_textarea_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                        <textarea name="form_textarea_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                          type="text" <?=(!empty($_POST['form_textarea_' . $keys[0]]) ? 'value="' . $_POST['form_textarea_' . $keys[0]] . '"' : '');?>
                                          placeholder="Введите ваш предложение "></textarea>
                                    </div>
                                </div>
                                <?php
                            }
                            break;
                    }
                    ?>
                <?php } ?>
                <div class="form__column">
                    <div class="form__inputs">
                        <?php foreach($arResult['ITEMS'] as $item) { ?>
                            <?php
                            $keys = array_keys($item['ANSWERS']);
                            switch($item['COMMENTS']) {
                                case"email":
                                    ?>
                                    <div class="form__input">
                                        <label for="form_email_<?=$keys[0];?>"><?=$item['TITLE'];?>*</label>
                                        <input  id="form_email_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                                name="form_email_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_email_' . $keys[0]]) ? 'value="' . $_POST['form_email_' . $keys[0]] . '"' : '');?>
                                                placeholder="Введите реальный E-mail на него придет письмо  подтверждения">
                                        <?php if ($item['IS_ERROR']) {?>
                                            <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                        <?php } ?>
                                    </div>
                                    <?php
                                    break;
                                case"phone":
                                    ?>
                                    <div class="form__input">
                                        <label for="form_text_<?=$keys[0];?>"><?=$item['TITLE'];?>*</label>
                                        <input id="form_text_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                               name="form_text_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_text_' . $keys[0]]) ? 'value="' . $_POST['form_text_' . $keys[0]] . '"' : '');?>
                                               placeholder="+7(ХХХ)ХХХХХХХ">
                                        <?php if ($item['IS_ERROR']) {?>
                                            <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                        <?php } ?>
                                    </div>
                                    <?php
                                    break;
                                case"fio":
                                    ?>
                                    <div class="form__input">
                                        <label for="form_text_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                        <input id="form_text_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                               name="form_text_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_text_' . $keys[0]]) ? 'value="' . $_POST['form_text_' . $keys[0]] . '"' : '');?>
                                               placeholder="Введите фамилию имя и отчество">
                                        <?php if ($item['IS_ERROR']) {?>
                                            <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                        <?php } ?>
                                    </div>
                                    <?php
                                    break;
                                case"agree":
                                    $keys = array_keys($item['ANSWERS']);
                                    ?>
                                    <div class="form__submit">
                                        <div class="form__checkbox">
                                            <input class="form__checkbox-input" type="checkbox" name="form_checkbox_<?=$item['SID'];?>[]" value="<?=$keys[0];?>">
                                            <div class="form__checkbox-btn <?=($item['IS_ERROR'] ? 'js-error' : '');?>"></div>
                                            <div class="form__checkbox-text"><?=$item['TITLE'];?></div>
                                        </div>
                                        <?php if ($item['IS_ERROR']) {?>
                                            <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                        <?php } ?>
                                        <input type="hidden" name="web_form_apply" value="Y" />
                                        <button class="btn" type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>">Отправить</button>
                                    </div>
                                    <?php
                                    break;
                            }
                            ?>
                        <?php } ?>
                    </div>
                </div>
            </div>

        <?=$arResult["FORM_FOOTER"];?>

    </div>
</section>
