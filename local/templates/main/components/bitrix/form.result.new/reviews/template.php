<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    15.11.2022
 * Time:    14:00
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
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<section class="s-reviews">
    <div class="l-default">
        <div class="s-reviews__top">
            <div class="s-reviews__caption">нам о нас</div>
            <div class="form__title">Отзывы</div>
        </div>

        <?=$arResult['FORM_HEADER'];?>
            <div class="s-reviews__columns">
                <div class="s-reviews__column">
                    <div class="form__subtitle">Расскажите нам о нас. Выберите нужную категорию отзыва</div>
                    <?php foreach($arResult['ITEMS'] as $item) { ?>
                        <?php
                        $keys = array_keys($item['ANSWERS']);
                        switch($item['COMMENTS']) {
                            case"category":
                                ?>
                                <div class="form__select">
                                    <select class="select" name="form_dropdown_<?=$item['SID'];?>" id="form_dropdown_<?=$item['SID'];?>">
                                        <?php foreach ($item['ANSWERS'] as $option) {?>
                                        <option value="<?=$option['ID'];?>"><?=$option['MESSAGE'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <?php
                            break;
                            case"rating":
                                ?>
                                <div class="form__raitings">
                                    <div class="form__raitings-items">
                                        <?php foreach ($item['ANSWERS'] as $option) { ?>
                                        <div class="form__raitings-item">
                                            <input data-count="<?=$option['MESSAGE'];?>" type="radio" id="<?=$option['ID'];?>" name="form_radio_<?=$item['SID'];?>"  value="<?=$option['ID'];?>">
                                            <svg class="ico ico-mono-emblem">
                                                <use xlink:href="img/sprite-mono.svg#ico-mono-emblem"></use>
                                            </svg>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php
                            break;
                            case"review":
                                ?>
                                <div class="form__textarea">
                                    <label for="form_textarea_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                    <textarea name="form_textarea_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                              type="text" <?=(!empty($_POST['form_textarea_' . $keys[0]]) ? 'value="' . $_POST['form_textarea_' . $keys[0]] . '"' : '');?>
                                              placeholder="Введите ваш отзыв"></textarea>
                                    <?php if ($item['IS_ERROR']) {?>
                                        <p><?=$item['ERROR_MESSAGE'];?></p>
                                    <?php } ?>
                                </div>
                                <?php
                            break;
                        }
                        ?>
                    <?php } ?>
                </div>
                <div class="s-reviews__column">
                    <div class="form__inputs">
                        <?php foreach($arResult['ITEMS'] as $item) { ?>
                        <?php
                        $keys = array_keys($item['ANSWERS']);
                        switch($item['COMMENTS']) {
                            case"email":
                                ?>
                                <div class="form__input">
                                    <label for="form_email_<?=$keys[0];?>"><?=$item['TITLE'];?>*</label>
                                    <input id="form_email_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                           name="form_email_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_email_' . $keys[0]]) ? 'value="' . $_POST['form_email_' . $keys[0]] . '"' : '');?>
                                           placeholder="Введите реальный E-mail на него придет письмо  подтверждения" required>
                                    <?php if ($item['IS_ERROR']) {?>
                                        <p><?=$item['ERROR_MESSAGE'];?></p>
                                    <?php } ?>
                                </div>
                                <?php
                            break;
                            case"phone":
                                ?>
                                <div class="form__input">
                                    <label for="form_text_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                    <input id="form_text_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                           name="form_text_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_text_' . $keys[0]]) ? 'value="' . $_POST['form_text_' . $keys[0]] . '"' : '');?>
                                           placeholder="+7(ХХХ)ХХХХХХХ">
                                </div>
                                <?php
                            break;
                            case"fio":
                                ?>
                                <div class="form__input">
                                    <label for="form_text_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                    <input id="form_text_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                           name="form_text_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_text_' . $keys[0]]) ? 'value="' . $_POST['form_text_' . $keys[0]] . '"' : '');?>
                                           placeholder="Введите фамилию имя и отвечтво">
                                </div>
                                <?php
                            break;
                        }
                        ?>
                        <?php } ?>
                        <div class="form__submit">
                            <input type="hidden" name="web_form_apply" value="Y" />
                            <div class="reviews__form-mobile"></div>
                            <!--<div class="btn">Отправить</div>-->
                            <button class="btn" type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>">Отправить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__checkbox-wrapper">
                <?php foreach($arResult['ITEMS'] as $item) { ?>
                    <?php
                    switch($item['COMMENTS']) {
                        case"agree":
                            $keys = array_keys($item['ANSWERS']);
                            ?>
                            <div class="form__checkbox">
                                <input class="form__checkbox-input" type="checkbox" name="form_checkbox_<?=$item['SID'];?>[]" value="<?=$keys[0];?>">
                                <div class="form__checkbox-btn <?=($item['IS_ERROR'] ? 'js-error' : '');?>"></div>
                                <div class="form__checkbox-text"><?=$item['TITLE'];?></div>
                            </div>
                            <?php if ($item['IS_ERROR']) {?>
                            <p><?=$item['ERROR_MESSAGE'];?></p>
                        <?php } ?>
                            <?php
                            break;
                    }
                    ?>
                <?php } ?>
            </div>
        <?=$arResult["FORM_FOOTER"];?>
    </div>
</section>
