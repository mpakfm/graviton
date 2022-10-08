<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    24.09.2022
 * Time:    1:18
 */
/** @var CMain $APPLICATION */
/** @var CUser $USER */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\CookieSecret;

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/global.css">', true);
Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/extend.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/vendor.js" defer="defer"></script>', false, AssetLocation::BODY_END);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/main.js" defer="defer"></script>', false, AssetLocation::BODY_END);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/extend.js" defer="defer"></script>', false, AssetLocation::BODY_END);

$searchParam = [
    "PAGE"        => "/search",
    "USE_SUGGEST" => "Y",
];

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <base href="<?=SITE_TEMPLATE_PATH;?>/">

    <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">
    <?$APPLICATION->ShowHead();?>
</head>
<body data-scroll-container>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <?php CookieSecret::setCookieValue(); ?>
    <?=CookieSecret::getJsFunction();?>
    <header class="header">
        <div class="l-default">
            <div class="header__wrapper">
                <a class="header__logo" href="/">
                    <div class="header__logo-emblem">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8731 0L2.13816 5.56262C0.815061 6.31864 1.45257e-07 7.71584 0 9.22789L7.41963e-07 20.3155L3.35996 18.3956L3.35996 9.22789C3.35996 8.90387 3.53462 8.60447 3.81814 8.44247L11.8731 3.8398L11.8731 0Z" fill="#D91745"/>
                            <path d="M13.5368 32.433L3.80148 26.8701L7.16144 24.9502L15.2168 29.5531C15.5003 29.7151 15.8497 29.7151 16.1332 29.5531L24.1553 24.9693L27.5152 26.8892L17.8132 32.433C16.4901 33.189 14.8599 33.189 13.5368 32.433Z" fill="#D91745"/>
                            <path d="M31.35 20.3535L31.35 9.22789C31.35 7.71584 30.5349 6.31864 29.2118 5.56262L19.5094 0.0185866V3.85839L27.5319 8.44247C27.8154 8.60448 27.99 8.90388 27.99 9.22789V18.4336L31.35 20.3535Z" fill="#D91745"/>
                            <path d="M22.4441 22.1825L23.1014 21.0636L15.6646 16.8442L8.17547 21.0933L8.81539 22.1825H22.4441Z" fill="#D91745"/>
                            <path d="M7.39721 19.7031L14.8864 15.4541V6.76485H13.799L6.79739 18.6822L7.39721 19.7031Z" fill="#D91745"/>
                            <path d="M16.4375 6.76485L16.4375 15.4541L23.8743 19.6734L24.5136 18.5855L17.5688 6.76485H16.4375Z" fill="#D91745"/>
                        </svg>
                    </div>
                    <div class="header__logo-text logo--text"><svg width="132" height="14" viewBox="0 0 132 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8 1.72559H0.25V13.2756H3.77852V4.40746H11.8V1.72559Z" fill="white"/>
                            <path d="M21.914 7.70484C22.5781 7.70484 23.1031 7.68488 23.485 7.64308C23.867 7.60135 24.1568 7.52687 24.3543 7.41791C24.5519 7.29445 24.6723 7.13107 24.7155 6.92587C24.7719 6.70796 24.8002 6.42111 24.8002 6.06524V5.92181C24.8002 5.56773 24.772 5.28089 24.7155 5.06119C24.6723 4.84328 24.5538 4.67809 24.3543 4.56913C24.1567 4.44567 23.867 4.36394 23.485 4.32401C23.1031 4.28229 22.5801 4.26224 21.914 4.26224H17.7972V7.70313L21.914 7.70305V7.70484V7.70484ZM17.7972 13.2756H14.2749V1.72559H22.5292C23.7033 1.72559 24.6648 1.78003 25.4155 1.88898C26.1662 1.99793 26.7532 2.20312 27.1766 2.50269C27.6019 2.78954 27.8916 3.20539 28.0459 3.75195C28.2152 4.284 28.2999 4.98124 28.2999 5.84007V6.14697C28.2999 7.0076 28.2152 7.71031 28.0459 8.25687C27.8898 8.78892 27.6 9.20648 27.1766 9.50612C26.7514 9.80569 26.1644 10.0109 25.4155 10.1198C24.6666 10.2288 23.7033 10.2832 22.5292 10.2832H17.7972V13.2756V13.2756Z" fill="white"/>
                            <path d="M45.6251 13.2755H41.619L40.4688 11.2074L32.5882 11.2074L31.4596 13.2756L27.4751 13.2755L34.2703 1.72559H38.8083L45.6251 13.2755V13.2755ZM39.138 8.79066L36.5471 4.14235H36.4588L33.9131 8.79066H39.138V8.79066Z" fill="white"/>
                            <path d="M47.2749 13.2737V1.72559H56.9708C57.8867 1.72559 58.647 1.77276 59.252 1.86899C59.8719 1.96521 60.3644 2.12857 60.7315 2.36095C61.0967 2.57882 61.3589 2.87288 61.5125 3.24149C61.6679 3.61001 61.7447 4.06751 61.7447 4.61398C61.7447 5.42005 61.5968 6.01915 61.3008 6.41676C61.005 6.8125 60.5966 7.08488 60.076 7.23554V7.27726C60.7371 7.38619 61.2447 7.65303 61.5968 8.07607C61.9489 8.4991 62.1249 9.11996 62.1249 9.93874C62.1249 10.5941 62.0406 11.1405 61.8721 11.5763C61.7035 11.9993 61.4432 12.3406 61.0911 12.6002C60.739 12.8453 60.2951 13.0233 59.7595 13.1322C59.2238 13.2284 58.5908 13.2756 57.8585 13.2756H47.2749V13.2737V13.2737ZM57.2462 10.8174C57.7818 10.8174 58.147 10.7212 58.3437 10.5306C58.5553 10.3254 58.6602 10.0259 58.6602 9.6301C58.6602 9.21977 58.5553 8.92751 58.3437 8.74957C58.147 8.57162 57.7799 8.48273 57.2462 8.48273H50.7828V10.8174H57.2462ZM57.1618 6.27149C57.5289 6.27149 57.8098 6.19702 58.0065 6.04637C58.2182 5.89571 58.3231 5.61608 58.3231 5.20763C58.3231 4.7701 58.2182 4.47783 58.0065 4.3271C57.8098 4.17645 57.5271 4.10198 57.1618 4.10198L50.7828 4.10205V6.27336H57.1618V6.27149Z" fill="white"/>
                            <path d="M64.6001 13.2756H70.1295L77.399 4.63262H77.4868V13.2756H81.1001V1.72559H75.483L68.3014 10.3685L68.2349 10.3686V1.72566L64.6001 1.72559V13.2756Z" fill="white"/>
                            <path d="M91.5422 13.2756H87.9599V4.32572H82.75V1.72559H96.775V4.32572H91.5422V13.2756Z" fill="white"/>
                            <path d="M105.983 13.2744C104.821 13.2744 104.199 13.246 103.352 13.189C102.52 13.1453 101.81 13.0541 101.223 12.9099C100.635 12.7523 100.154 12.5397 99.78 12.2682C99.4213 11.9967 99.1409 11.6398 98.9405 11.1974C98.7401 10.755 98.6027 10.212 98.5322 9.57032C98.4596 8.92861 98.4253 8.15773 98.4253 7.25784V6.91607C98.4253 6.01618 98.4615 5.24531 98.5322 4.6036C98.6047 3.96189 98.7402 3.41886 98.9405 2.97654C99.1409 2.51897 99.4213 2.15632 99.78 1.88485C100.154 1.61337 100.633 1.4064 101.223 1.26402C101.81 1.12163 102.52 1.02859 103.352 0.98496C104.199 0.92804 104.821 0.899494 105.983 0.899494L106.542 0.899414C107.704 0.899414 108.321 0.927878 109.153 0.984881C110 1.02851 110.717 1.11968 111.305 1.26394C111.893 1.40632 112.366 1.61329 112.725 1.88477C113.099 2.15624 113.385 2.52076 113.585 2.97646C113.785 3.41886 113.923 3.96181 113.993 4.60351C114.066 5.24522 114.1 6.0161 114.1 6.91599V7.25776C114.1 8.15765 114.064 8.92853 113.993 9.57024C113.921 10.2119 113.785 10.7626 113.585 11.2182C113.385 11.6606 113.097 12.0175 112.725 12.289C112.366 12.5605 111.893 12.7674 111.305 12.9098C110.717 13.0522 110 13.1452 109.153 13.1889C108.321 13.2458 107.704 13.2743 106.542 13.2743L105.983 13.2744V13.2744ZM106.412 10.4702C107.46 10.4702 107.895 10.4417 108.485 10.3847C109.088 10.3278 109.532 10.1911 109.818 9.97846C110.12 9.75062 110.299 9.41456 110.356 8.97224C110.429 8.52984 110.463 7.92988 110.463 7.17425V6.98253C110.463 6.21174 110.427 5.60419 110.356 5.16179C110.299 4.70422 110.12 4.37012 109.818 4.15557C109.532 3.92772 109.088 3.78534 108.485 3.72646C107.897 3.66954 107.46 3.641 106.412 3.641H106.111C105.05 3.641 104.606 3.66946 104.018 3.72646C103.43 3.78338 102.986 3.92585 102.684 4.15557C102.398 4.37012 102.219 4.70422 102.146 5.16179C102.089 5.60419 102.06 6.21174 102.06 6.98253V7.17425C102.06 7.93176 102.089 8.52984 102.146 8.97224C102.219 9.41464 102.398 9.75062 102.684 9.97846C102.986 10.193 103.43 10.3278 104.018 10.3847C104.606 10.4417 105.05 10.4702 106.111 10.4702H106.412Z" fill="white"/>
                            <path d="M131.425 13.2756H127.906V8.81068H120.094V13.2756H116.575V1.72559H120.094V5.94357H127.906V1.72559H131.425V13.2756Z" fill="white"/>
                        </svg>
                    </div>
                </a>
                <?$APPLICATION->IncludeComponent("bitrix:search.form", "header", $searchParam);?>
                <div class="header__phone"><a class="header__phone-link" href="tel:+78005008886">8-800-500-88-86</a>
                    <div class="header__phone-text">круглосуточно</div>
                </div><a class="header__btn btn btn--bordered" href="#popup-registration" data-fancybox>
                    <div class="header__btn-icon">
                        <svg class="ico ico-color-emblem">
                            <use xlink:href="img/sprite-color.svg#ico-color-emblem"></use>
                        </svg>
                    </div>
                    <div class="header__btn-text">Стать партнером</div>
                    <div class="header__btn-arrow">
                        <svg class="ico ico-mono-arrow-fat">
                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                        </svg>
                    </div></a>
                <div class="header__burger"><span> </span><span> </span></div>
            </div>
        </div>

        <?$APPLICATION->IncludeComponent("mpakfm:menu.section.list","header",
            Array(
                "VIEW_MODE" => "TEXT",
                "SHOW_PARENT_NAME" => "Y",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "5",
                "SECTION_CODE" => "header",
                "SECTION_URL" => "",
                "COUNT_ELEMENTS" => "Y",
                "TOP_DEPTH" => "10",
                "SECTION_FIELDS" => ["ID", "CODE", "NAME", "SORT"],
                "SECTION_USER_FIELDS" => ["UF_LINK", "UF_BLANK"],
                "ELEMENT_FIELDS" => ["ID", "CODE", "NAME", "SORT", "PREVIEW_PICTURE"],
                "ELEMENT_USER_FIELDS" => ["PROPERTY_LINK", "PROPERTY_LINK", "PROPERTY_BLANK", "PROPERTY_POPUP_CLASS"],
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_NOTES" => "",
                "CACHE_GROUPS" => "Y"
            )
        );?>
        <div class="header__mobile">
            <div class="header__mobile-top">
                <div class="header__mobile-search"></div>
                <div class="header__mobile-title"></div>
                <div class="close"><span> </span><span> </span></div>
            </div>
        <div class="header__mobile-content"></div><a class="header__mobile-btn btn btn--bordered" href="mailto:sale@graviton.ru">Связаться с нами</a>
        </div>
    </header>
    <div class="s-contact-us">
        <div class="s-contact-us__left">
            <div class="s-contact-us__left-text">Связаться с нами</div>
            <div class="s-contact-us__left-icon"> <img src="img/svg/chat.svg" alt=""></div>
            <div class="s-contact-us__left-top"> <img src="img/svg/arrow-top.svg" alt=""></div>
        </div>
        <div class="s-contact-us__content">
            <div class="close"> <span></span><span></span></div>
        <div class="s-contact-us__item"><a class="s-contact-us__item-phone" href="tel:+78005008886">8-800-500-88-86</a><a class="s-contact-us__item-btn btn btn--grey" href="tel:+78005008886">Позвонить</a></div>
            <div class="s-contact-us__item">
                <div class="s-contact-us__item-title">Свяжитесь с нами по электронной почте</div><a class="s-contact-us__item-btn btn btn--grey" href="mailto:sale@graviton.ru">Написать</a>
            </div>
            <div class="s-contact-us__item">
                <div class="s-contact-us__item-title">Обратитесь в службу технической поддержки</div><a class="s-contact-us__item-btn btn btn--grey" href="mailto:sale@graviton.ru">Написать</a>
            </div>
        </div>
    </div>
    <div class="popup popup-form popup-registration" id="popup-registration">
        <form id="header-registration" class="form">
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
                    <input name="robot" class="form__checkbox-input" type="checkbox">
                    <div class="form__checkbox-btn"></div>
                    <div class="form__checkbox-text">Я не робот</div>
                </div>
                <div class="form__checkbox">
                    <input name="terms" class="form__checkbox-input" type="checkbox" checked>
                    <div class="form__checkbox-btn"></div>
                    <div class="form__checkbox-text">Я согласен с условиями обработки персональных данных.</div>
                </div>
            </div>
            <button class="form__submit btn btn--black" type="submit">Отправить</button>
        </form>
    </div>
