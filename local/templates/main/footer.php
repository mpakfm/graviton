<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    24.09.2022
 * Time:    1:18
 */
/** @var CMain $APPLICATION */

use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;

$footerMenuIblock = CacheSelector::getIblockId('menu', 'content');
$copyMenuSection  = CacheSelector::getSectionByCode($footerMenuIblock, 'copyright');

$menuCopy = [
    "VIEW_MODE"           => "TEXT",
    "SHOW_PARENT_NAME"    => "Y",
    "IBLOCK_TYPE"         => "content",
    "IBLOCK_ID"           => $footerMenuIblock,
    "SECTION_ID"          => $copyMenuSection['ID'],
    "SECTION_CODE"        => "",
    "SECTION_URL"         => "",
    "COUNT_ELEMENTS"      => "Y",
    "TOP_DEPTH"           => "2",
    "SECTION_FIELDS"      => ["ID", "CODE", "NAME"],
    "SECTION_USER_FIELDS" => ["UF_LINK", "UF_BLANK"],
    "ELEMENT_FIELDS"      => ["ID", "CODE", "NAME"],
    "ELEMENT_USER_FIELDS" => ["PROPERTY_LINK", "PROPERTY_LINK", "PROPERTY_BLANK", "PROPERTY_POPUP_CLASS"],
    "ADD_SECTIONS_CHAIN"  => "Y",
    "SET_TITLE"           => "N",
    "CACHE_TYPE"          => "N",
    "CACHE_TIME"          => "36000000",
    "CACHE_NOTES"         => "",
    "CACHE_GROUPS"        => "Y"
];

$iblockPages = CacheSelector::getIblockId('pages', 'content');
$menuSupportParams = [
    "IBLOCK_TYPE"         => "content",
    "IBLOCK_ID"           => $iblockPages,
    "SORT_BY1"            => "SORT",
    "SORT_ORDER1"         => "ASC",
    "PARENT_SECTION_CODE" => "support",
    "SET_TITLE"           => "N",
    "CACHE_TYPE"          => "Y",
    "CACHE_TIME"          => "3600",
    "CACHE_FILTER"        => "Y",
    "CACHE_GROUPS"        => "Y",
];

$partners = [
    "IBLOCK_TYPE"            => "content",
    "IBLOCKS"                => ["partners"],
    "FIELD_CODE"             => ["ID", "CODE", "NAME", "PREVIEW_PICTURE"],
    "FILTER_REQUIRED_FIELDS" => ["PROPERTY_IS_SHOW_POPUP"],
    "SORT_BY1"               => "SORT",
    "SORT_ORDER1"            => "ASC",
    "SORT_BY2"               => "NAME",
    "SORT_ORDER2"            => "ASC",
    "SET_TITLE"              => "N",
    "CACHE_TYPE"             => "Y",
    "CACHE_TIME"             => "3600",
    "CACHE_GROUPS"           => "Y",
];

$subscribe = [
    "COMPONENT_TEMPLATE" => ".default",
    "USE_PERSONALIZATION" => "N",
    "CONFIRMATION" => "N",
    "HIDE_MAILINGS" => "Y",
    "SHOW_HIDDEN" => "N",
    "USER_CONSENT" => "N",
    "AJAX_MODE" => "Y",
    "AJAX_OPTION_JUMP" => "Y",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "Y",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "SET_TITLE" => "N"
];

$breadcrumb = Breadcrumb::init()::$chain;

?>
<footer class="footer">
    <div class="footer__top">
        <div class="l-default">
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
    </div>
    <div class="footer__wrapper">
        <div class="footer__content">
            <div class="l-default">
                <div class="footer__mobile-menu"></div>
                <div class="footer__content-top">
                    <div class="footer__row">
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
                            <?$APPLICATION->IncludeComponent("mpakfm:sender.subscribe","footer", $subscribe);?>
                        </div>
                        <div class="footer__nav">
                            <div class="footer__nav-column">
                                <a class="footer__nav-top" href="/catalog/">
                                    <div class="footer__nav-title">Продукты</div>
                                    <div class="footer__nav-arrow">
                                        <svg class="ico ico-mono-arrow-fat">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                        </svg>
                                    </div>
                                </a>
                                <div class="footer__nav-list">
                                    <a class="footer__nav-item" href="/catalog/systems_on_russian_cpus/">Системы на Российских ЦПУ</a>
                                    <a class="footer__nav-item" href="/catalog/server_solutions/">Серверные решения</a>
                                    <a class="footer__nav-item" href="/catalog/client_solutions/">Клиентские решения</a>
                                    <a class="footer__nav-item" href="/catalog/motherboards/">Материнские платы</a>
                                    <a class="footer__nav-item" href="https://гелиус.рф/" target="_blank">Гиперконвергентные решения</a>
                                </div>
                            </div>
                            <div class="footer__nav-column">
                                <div class="footer__nav-top">
                                    <div class="footer__nav-title">Поддержка</div>
                                    <div class="footer__nav-arrow">
                                        <svg class="ico ico-mono-arrow-fat">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                        </svg>
                                    </div>
                                </div>
                                <?$APPLICATION->IncludeComponent("mpakfm:news.list","menu.footer.support", $menuSupportParams);?>
                            </div>
                            <div class="footer__nav-column">
                                <div class="footer__nav-top">
                                    <div class="footer__nav-title">О компании</div>
                                    <div class="footer__nav-arrow">
                                        <svg class="ico ico-mono-arrow-fat">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="footer__nav-list">
                                    <a class="footer__nav-item" href="/page/about">Кто мы</a>
                                    <a class="footer__nav-item" href="/news/">Новости</a>
                                    <a class="footer__nav-item" href="/events/">Мероприятия</a>
                                </div>
                            </div>
                            <div class="footer__nav-column">
                                <div class="footer__nav-top">
                                    <div class="footer__nav-title">Услуги</div>
                                    <div class="footer__nav-arrow">
                                        <svg class="ico ico-mono-arrow-fat">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="footer__nav-list">
                                    <a class="footer__nav-item" href="/page/services/kontraktnaya-razrabotka">Контрактная разработка</a>
                                    <a class="footer__nav-item" href="/page/services/oem">ОЕМ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__content-bottom">
                    <div class="footer__row">
                        <div class="footer__info">
                            <div class="footer__address-container">
                                <div class="footer__address">Москва, Бизнес центр "Легион 3", Киевская улица, 7</div>
                            </div>
                            <div class="footer__contact">
                                <a class="footer__email" href="mailto:sale@graviton.ru">sale@graviton.ru</a>
                                <a class="footer__contact-btn btn btn--bordered" href="mailto:sale@graviton.ru">Связаться с нами</a>
                            </div>
                        </div>
                        <div class="footer__nav">
                            <div class="footer__nav-column">
                                <a class="footer__nav-top" href="/cases/">
                                    <div class="footer__nav-title">Кейсы</div>
                                    <div class="footer__nav-arrow">
                                        <svg class="ico ico-mono-arrow-fat">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="footer__nav-column">
                                <a class="footer__nav-top" href="/partners">
                                    <div class="footer__nav-title">Партнеры</div>
                                    <div class="footer__nav-arrow">
                                        <svg class="ico ico-mono-arrow-fat">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="footer__nav-column">
                                <a class="footer__nav-top" href="/page/support/zagruzka-drayverov">
                                    <div class="footer__nav-title">Документация</div>
                                    <div class="footer__nav-arrow">
                                        <svg class="ico ico-mono-arrow-fat">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="footer__nav-column">
                                <a class="footer__nav-top" href="/contacts">
                                    <div class="footer__nav-title">Контакты</div>
                                    <div class="footer__nav-arrow">
                                        <svg class="ico ico-mono-arrow-fat">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-fat"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-default">
            <div class="footer__mobile"></div>
            <?$APPLICATION->IncludeComponent("mpakfm:menu.section.list","copyrights", $menuCopy);?>
        </div>
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
        <?$APPLICATION->IncludeComponent("mpakfm:news.line", "footer.partners", $partners);?>
    </div>
</div>
</body>
</html>
