<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    06.11.2022
 * Time:    23:52
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
<?=$arResult['FORM_HEADER'];?>

    <div class="s-support-form__title">Запросить дополнительный драйвер</div>
    <div class="s-support-form__columns">
        <div class="s-support-form__inputs">
            <div class="s-support-form__column">
                <div class="form__title">Контакты</div>
                <div class="form__inputs">
                    <?php foreach($arResult['ITEMS'] as $item) { ?>
                        <?php
                        $keys = array_keys($item['ANSWERS']);
                        switch($item['COMMENTS']) {
                            case"d-email":
                                ?>
                                <div class="form__input">
                                    <label for="form_email_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                    <input id="form_email_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                           name="form_email_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_email_' . $keys[0]]) ? 'value="' . $_POST['form_email_' . $keys[0]] . '"' : '');?>
                                           placeholder="Введите реальный E-mail на него придет письмо  подтверждения">
                                    <?php if ($item['IS_ERROR']) {?>
                                        <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                    <?php } ?>
                                </div>
                                <?php
                                break;
                            case"d-fio":
                                ?>
                                <div class="form__input">
                                    <label for="form_text_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                    <input id="form_text_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                           name="form_text_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_text_' . $keys[0]]) ? 'value="' . $_POST['form_text_' . $keys[0]] . '"' : '');?>
                                           placeholder="Введите фамилию имя и отвечтво">
                                    <?php if ($item['IS_ERROR']) {?>
                                        <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                    <?php } ?>
                                </div>
                                <?php
                                break;
                            case"d-phone":
                                ?>
                                <div class="form__input">
                                    <label for="form_text_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                    <input id="form_text_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                           name="form_text_<?=$keys[0];?>" type="text" <?=(!empty($_POST['form_text_' . $keys[0]]) ? 'value="' . $_POST['form_text_' . $keys[0]] . '"' : '');?>
                                           placeholder="+7(ХХХ)ХХХХХХХ">
                                    <?php if ($item['IS_ERROR']) {?>
                                        <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                    <?php } ?>
                                </div>
                                <?php
                                break;
                        }
                        ?>
                    <?php } ?>
                </div>
            </div>
            <div class="s-support-form__column">
                <div class="form__title">Оборудование</div>
                <div class="form__inputs">
                    <?php foreach($arResult['ITEMS'] as $item) { ?>
                        <?php
                        $keys = array_keys($item['ANSWERS']);
                        switch($item['COMMENTS']) {
                            case"d-serial":
                                ?>
                                <div class="form__input">
                                    <label for="form_text_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                    <input name="form_text_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                           type="text" <?=(!empty($_POST['form_text_' . $keys[0]]) ? 'value="' . $_POST['form_text_' . $keys[0]] . '"' : '');?>
                                           placeholder="0000000000000-0000">
                                    <?php if ($item['IS_ERROR']) {?>
                                        <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                    <?php } ?>
                                </div>
                                <?php
                                break;
                            case"d-question":
                                ?>
                                <div class="form__textarea">
                                    <label for="form_textarea_<?=$keys[0];?>"><?=$item['TITLE'];?></label>
                                    <textarea name="form_textarea_<?=$keys[0];?>" <?=($item['IS_ERROR'] ? 'class="js-error"' : '');?>
                                              type="text" <?=(!empty($_POST['form_textarea_' . $keys[0]]) ? 'value="' . $_POST['form_textarea_' . $keys[0]] . '"' : '');?>
                                              placeholder="Введите ваш вопрос"></textarea>
                                    <?php if ($item['IS_ERROR']) {?>
                                        <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                                    <?php } ?>
                                </div>
                                <?php
                                break;
                        }
                        ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="s-support-form__mobile"></div>
        <div class="s-support-form__column s-support-form__info">
            <div class="form__title"></div>
            <div class="s-support-form__contacts">
                <div class="s-support-form__contacts-left">
                    <div class="s-support-form__contacts-title">Другие способы получить помощь</div>
                    <div class="s-support-form__contacts-mobile"></div>
                </div>
                <div class="s-support-form__contacts-links"><a class="s-support-form__contacts-phone" href="tel:88005517575">
                        <label>Позвоните нам</label><span> 8 800 500-88-86</span></a><a class="s-support-form__contacts-email" href="mailto:support@graviton.ru">
                        <label>Напишите нам</label><span>support@graviton.ru</span></a></div>
            </div>
        </div>
    </div>
    <div class="s-support-form__bottom">
        <div class="s-support-form__bottom-left">
            <div class="s-support-form__bottom-item">
                <?php foreach($arResult['ITEMS'] as $item) { ?>
                    <?php
                    switch($item['COMMENTS']) {
                        case"d-agree":
                            $keys = array_keys($item['ANSWERS']);
                            ?>
                            <div class="form__checkbox">
                                <input class="form__checkbox-input" type="checkbox" name="form_checkbox_<?=$item['SID'];?>[]" value="<?=$keys[0];?>">
                                <div class="form__checkbox-btn <?=($item['IS_ERROR'] ? 'js-error' : '');?>"></div>
                                <div class="form__checkbox-text"><a href="/upload/privacy_policy.pdf"><?=$item['TITLE'];?></a></div>
                            </div>
                            <?php if ($item['IS_ERROR']) {?>
                                <label class="error-label"><?=$item['ERROR_MESSAGE'];?></label>
                            <?php } ?>
                            <?php
                            break;
                    }
                    ?>
                <?php } ?>
            </div>
            <div class="s-support-form__bottom-item">
                <input type="hidden" name="web_form_apply" value="Y" />
                <button class="form__submit btn" type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>">Отправить</button>
            </div>
        </div>
        <div class="s-support-form__contacts-message s-support-form__bottom-item">Круглосуточно по всей России</div>
    </div>

<?=$arResult["FORM_FOOTER"];?>
