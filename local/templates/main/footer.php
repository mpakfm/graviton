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
    "CACHE_TYPE" => "N",
    "CACHE_TIME" => "36000000",
    "CACHE_NOTES" => "",
    "CACHE_GROUPS" => "Y"
];
?>
<footer class="footer">
    <div class="l-default">
        <div class="footer__top">
            <div class="breadcrumbs">
                <div class="breadcrumb">
                    <div class="breadcrumb-icon">
                        <svg class="ico ico-mono-icon-breadcrumb">
                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-breadcrumb"></use>
                        </svg>
                    </div>
                    <div class="breadcrumb-text">Главная</div>
                </div>
            </div>
        </div>
        <div class="footer__content">
            <div class="footer__info">
                <div class="footer__logo">
                    <svg class="ico ico-color-logo">
                        <use xlink:href="img/sprite-color.svg#ico-color-logo"></use>
                    </svg>
                </div>
                <div class="footer__text">Будьте в курсе новостей, мероприятий и акций</div>
                <form class="form footer__subscribe">
                    <div class="form__inputs">
                        <div class="form__input">
                            <input type="email" name="email" placeholder="Укажите ваш e-mail">
                        </div>
                        <div class="form__submit">
                            <button class="btn btn--bordered" type="submit">Подписаться</button>
                        </div>
                    </div>
                    <div class="footer__checkbox">Я соглашаюсь получать рекламные и иные сообщения от ООО “Гравитон” на условиях политики конфиденциальности</div>
                </form>
                <div class="footer__address">Москва, Бизнес центр "Легион 3", Киевская улица, 7</div>
                <div class="footer__contact"><a class="footer__email" href="mailto:sale@graviton.ru">sale@graviton.ru</a><a class="footer__contact-btn btn btn--bordered" href="" data-fancybox>Связаться с нами</a></div>
            </div>

            <?$APPLICATION->IncludeComponent("mpakfm:menu.section.list","footer", $menuFooter);?>

        </div>
        <div class="footer__bottom"><a class="footer__bottom-item" href="">Использование cookies</a><a class="footer__bottom-item" href="">Политика конфиденциальности</a><a class="footer__bottom-item" href="">Пользовательское соглашение</a><a class="footer__bottom-item" href="">Карта сайта</a>
            <div class="footer__copyrights">© 2022 ООО «Новый Ай Ти Проект». Все права защищены</div>
        </div>
    </div>
</footer>

</body>
</html>
