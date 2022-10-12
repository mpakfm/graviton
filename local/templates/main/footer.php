<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    24.09.2022
 * Time:    1:18
 */
/** @var CMain $APPLICATION */

use Library\Tools\CacheSelector;

$footerMenuIblock  = CacheSelector::getIblockId('menu', 'content');
$footerMenuSection = CacheSelector::getSectionByCode($footerMenuIblock, 'footer');
$copyMenuSection   = CacheSelector::getSectionByCode($footerMenuIblock, 'copyright');

$menuFooter = [
    "VIEW_MODE" => "TEXT",
    "SHOW_PARENT_NAME" => "Y",
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $footerMenuIblock,
    "SECTION_ID" => $footerMenuSection['ID'],
    "SECTION_CODE" => "",
    "SECTION_URL" => "",
    "COUNT_ELEMENTS" => "Y",
    "TOP_DEPTH" => "2",
    "SECTION_FIELDS" => ["ID", "CODE", "NAME"],
    "SECTION_USER_FIELDS" => ["UF_LINK", "UF_BLANK"],
    "ELEMENT_FIELDS" => ["ID", "CODE", "NAME"],
    "ELEMENT_USER_FIELDS" => ["PROPERTY_LINK", "PROPERTY_LINK", "PROPERTY_BLANK", "PROPERTY_POPUP_CLASS"],
    "ADD_SECTIONS_CHAIN" => "Y",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "CACHE_NOTES" => "",
    "CACHE_GROUPS" => "Y"
];

$menuCopy = [
    "VIEW_MODE" => "TEXT",
    "SHOW_PARENT_NAME" => "Y",
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $footerMenuIblock,
    "SECTION_ID" => $copyMenuSection['ID'],
    "SECTION_CODE" => "",
    "SECTION_URL" => "",
    "COUNT_ELEMENTS" => "Y",
    "TOP_DEPTH" => "2",
    "SECTION_FIELDS" => ["ID", "CODE", "NAME"],
    "SECTION_USER_FIELDS" => ["UF_LINK", "UF_BLANK"],
    "ELEMENT_FIELDS" => ["ID", "CODE", "NAME"],
    "ELEMENT_USER_FIELDS" => ["PROPERTY_LINK", "PROPERTY_LINK", "PROPERTY_BLANK", "PROPERTY_POPUP_CLASS"],
    "ADD_SECTIONS_CHAIN" => "Y",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "CACHE_NOTES" => "",
    "CACHE_GROUPS" => "Y"
];
$breadcrumb = \Library\Tools\Breadcrumb::init()::$chain;
\Mpakfm\Printu::obj($breadcrumb)->title('$breadcrumb');
?>
<footer class="footer">
    <div class="l-default">
        <div class="footer__top">
            <div class="breadcrumbs">
                <ul class="breadcrumbs__list" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
                    <li class="breadcrumbs__item" itemscope="itemscope" itemprop="itemListElement" itemtype="https://schema.org/ListItem">
                        <a class="breadcrumbs__link" href="/" itemprop="item" title="Главная">
                            <span class="breadcrumbs__icon">
                                <svg class="ico ico-mono-icon-breadcrumb">
                                    <use xlink:href="img/sprite-mono.svg#ico-mono-icon-breadcrumb"></use>
                                </svg>
                            </span>
                            <meta itemprop="position" content="0" /><span itemprop="name">Главная</span>
                        </a>
                    </li>
                    <?php if (!empty($breadcrumb)) { ?>
                        <?php foreach($breadcrumb as $key => $part) { ?>
                                <?php if ($part['type'] == 'section') { ?>
                                    <li class="breadcrumbs__item" itemscope="itemscope" itemprop="itemListElement" itemtype="https://schema.org/ListItem">
                                        <a class="breadcrumbs__link" href="<?=$part['link'];?>" itemprop="item" title="<?=$part['name'];?>">
                                            <meta itemprop="position" content="<?=($key + 1);?>" />
                                            <span itemprop="name"><?=$part['name'];?></span></a>
                                    </li>
                                <?php } elseif ($part['type'] == 'item') { ?>
                                    <li class="breadcrumbs__item">
                                        <span class="breadcrumbs__link-current" itemprop="name"><?=$part['name'];?></span>
                                        <meta itemprop="item" content="#" />
                                        <meta itemprop="position" content="<?=($key + 1);?>" />
                                    </li>
                                <?php } ?>

                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="footer__content">
            <div class="footer__info">
                <div class="footer__info-top">
                    <div class="footer__logo">
                        <svg class="ico ico-color-logo">
                            <use xlink:href="img/sprite-color.svg#ico-color-logo"></use>
                        </svg>
                    </div>
                    <div class="footer__info-mobile">
                        <div class="footer__info-mobile--left"></div>
                        <div class="footer__info-mobile--right"></div>
                    </div>
                </div>
                <div class="non-active">
                <div class="footer__text">Будьте в курсе новостей, мероприятий и акций</div>
                <form class="form footer__subscribe">
                    <div class="form__inputs">
                        <div class="form__input">
                            <input type="email" name="email" placeholder="Укажите ваш e-mail" disabled>
                        </div>
                        <div class="form__submit">
                            <button class="btn btn--bordered" type="submit" disabled>Подписаться</button>
                        </div>
                    </div>
                    <div class="footer__checkbox">Я соглашаюсь получать рекламные и иные сообщения от ООО “Гравитон” на условиях политики конфиденциальности</div>
                </form>
                </div>
                <?php
                /*
                <?$APPLICATION->IncludeComponent("bitrix:sender.subscribe","custom",Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "USE_PERSONALIZATION" => "Y",
                        "CONFIRMATION" => "Y",
                        "SHOW_HIDDEN" => "Y",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_JUMP" => "Y",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "SET_TITLE" => "Y"
                    )
                );?>
                */
                ?>
                <div class="footer__address-container">
                    <div class="footer__address">Москва, Бизнес центр "Легион 3", Киевская улица, 7</div>
                </div>
                <div class="footer__contact">
                    <a class="footer__email" href="mailto:sale@graviton.ru">sale@graviton.ru</a>
                    <a class="footer__contact-btn btn btn--bordered" href="mailto:sale@graviton.ru">Связаться с нами</a>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent("mpakfm:menu.section.list","footer", $menuFooter);?>
        </div>

        <div class="footer__mobile"></div>

        <?$APPLICATION->IncludeComponent("mpakfm:menu.section.list","copyrights", $menuCopy);?>

    </div>
</footer>
<div class="popup popup-form popup-registration" id="popup-registration">
    <form class="form">
        <h5 class="form__title">Форма регистрации</h5>
        <div class="form__inputs">
            <div class="form__input">
                <label>E-mail </label>
                <input type="email" placeholder="Введите реальный E-mail на него придет письмо  подтверждения" name="email">
            </div>
            <div class="form__input">
                <label>ФИО</label>
                <input type="text" placeholder="Введите фамилию, имя и отчество" name="name">
            </div>
            <div class="form__input">
                <label>Телефон </label>
                <input type="text" placeholder="+7(ХХХ)ХХХХХХХ" name="phone">
            </div>
            <div class="form__input">
                <label>ИНН</label>
                <input type="number" placeholder="9999999999" name="inn">
            </div>
            <div class="form__input">
                <label>Название компании </label>
                <input type="text" placeholder="Введите название компании" name="company">
            </div>
        </div>
        <div class="form__checkboxes">
            <div class="form__checkbox">
                <input class="form__checkbox-input" type="checkbox">
                <div class="form__checkbox-btn"></div>
                <div class="form__checkbox-text">Я не робот</div>
            </div>
            <div class="form__checkbox">
                <input class="form__checkbox-input" type="checkbox">
                <div class="form__checkbox-btn"></div>
                <div class="form__checkbox-text">Я согласен с условиями обработки персональных данных.</div>
            </div>
        </div>
        <button class="form__submit btn btn--black" type="submit">Отправить</button>
    </form>
</div>

<div class="popup popup-categories" id="popup-categories">
    <div class="popup-categories__container">
        <div class="popup-categories__title"></div><!--Ноутбук Н15И-К2-->
        <div class="popup-categories__img">
            <picture>
                <!--
                <source data-srcset="img/popup/categories/lap.png" type="image/png"/>
                <img src="img/popup/categories/lap.png" alt=""/>-->
                <img src="/local/templates/main/img/goods/no-image-240x130.png" />
            </picture>
        </div>
        <div class="popup-categories__partners">
            <h2 class="title title--h2 text-center">Где купить ?</h2>
            <div class="s-partners__wrapper">
                <div class="s-partners__items">
                    <div class="s-partners__item"><img src="img/svg/logos/3logic.svg" alt=""></div>
                    <div class="s-partners__item"><img src="img/svg/logos/elbrus.svg" alt=""></div>
                    <div class="s-partners__item"><img src="img/svg/logos/basealt.svg" alt=""></div>
                    <div class="s-partners__item"><img src="img/svg/logos/astralinux.svg" alt=""></div>
                    <div class="s-partners__item"><img src="img/svg/logos/code.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
