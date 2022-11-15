<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    04.10.2022
 * Time:    18:12
 * @var $APPLICATION
 */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;

define("BODY_CLASS", "CONTACTS");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Graviton - Контакты");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/contacts.css?t=' . time() . '">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/contacts_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

?>
    <main class="main">
    <div class="back-img"> <img src="img/back/contacts.png"></div>
    <section class="s-contacts" style="background-image: url(img/back/contacts.png);">
        <div class="l-default">
            <div class="l-content">
                <div class="s-contacts__inner">
                    <div class="s-contacts__tabs">
                        <button class="s-contacts__item --office is-active" type="button" data-tab-target="tab_office">
                            <div class="s-contacts__item-title">Офис</div>
                            <div class="s-contacts__item-prefix"><span></span></div>
                        </button>
                        <button class="s-contacts__item --stock" type="button" data-tab-target="tab_stock">
                            <div class="s-contacts__item-title">Склад</div>
                            <div class="s-contacts__item-prefix"><span>* Въезд на территорию складского комплекса «Холмогоры» осуществляется по предварительному заказу пропуска через курирующего менеджера или через наш отдел по работе с клиентами и документами. В обоих случаях для  заказа пропуска необходимо иметь документы, подтверждающие цель приезда.</span></div>
                        </button>
                        <div class="s-contacts__stock">* Въезд на территорию складского комплекса «Холмогоры» осуществляется по предварительному заказу пропуска через курирующего менеджера или через наш отдел по работе с клиентами и документами. В обоих случаях для  заказа пропуска необходимо иметь документы, подтверждающие цель приезда.</div>
                    </div>
                    <div class="s-contacts__contents">
                        <div class="s-contacts__box is-active" id="tab_office">
                            <a class="s-contacts__box-popup" href="https://yandex.ru/map-widget/v1/-/CCUZMZfxSB" data-fancybox data-type="iframe">посмотреть на карте</a>
                            <div class="s-contacts__box-container">
                                <div class="s-contacts__box-subtitle">Адрес:</div>
                                <div class="s-contacts__box-text">Москва, Киевская улица, 7к1</div>
                            </div>
                            <div class="s-contacts__box-container">
                                <div class="s-contacts__box-subtitle">Телефон:</div><a class="s-contacts__box-text" href="tel:+79653100777">+7 965 310-07-77</a>
                            </div>
                            <div class="s-contacts__box-container">
                                <div class="s-contacts__box-subtitle">E-mail:</div><a class="s-contacts__box-text" href="mailto:sale@graviton.ru">sale@graviton.ru</a>
                            </div>
                        </div>
                        <div class="s-contacts__box" id="tab_stock">
                            <a class="s-contacts__box-popup" href="https://yandex.ru/map-widget/v1/-/CCUZeMQz~D" data-fancybox data-type="iframe">посмотреть на карте</a>
                            <div class="s-contacts__box-container">
                                <div class="s-contacts__box-subtitle">Адрес:</div>
                                <div class="s-contacts__box-text">Москвская область, Старое Ярославское ш., д. 1</div>
                            </div>
                            <div class="s-contacts__box-container">
                                <div class="s-contacts__box-subtitle">Телефон:</div><a class="s-contacts__box-text" href="tel:+79653100777">8 800 500-88-86</a>
                            </div>
                            <div class="s-contacts__box-container">
                                <div class="s-contacts__box-subtitle">E-mail:</div><a class="s-contacts__box-text" href="mailto:sale@graviton.ru">sale@graviton.ru</a>
                            </div>
                        </div>
                    </div>
                    <div class="s-contacts__information">
                        <div class="s-contacts__information-item">ООО «Новый Ай Ти Проект»</div>
                        <div class="s-contacts__information-item"><span>ИНН :</span>  7724338125 / 772401001</div>
                        <div class="s-contacts__information-item"><span>ОГРН :</span>  1157746958830</div>
                        <div class="s-contacts__information-item"><span>Юридический адрес :</span> 115487, г. Москва, ул. Нагатинская, дом 16</div>
                    </div>
                    <div class="s-contacts__driving">
                        <div class="s-contacts__driving-title">Схема проезда</div>
                        <div class="s-contacts__driving-prefix">Если вы планируете посетить наш офис или проехать на склад Гравитон, воспользуйтесь нашими рекомендациями. Скачайте схему проезда.</div>
                        <div class="s-contacts__driving-location">
                            <div class="s-contacts__location-item">
                                <div class="s-contacts__location-title">Главный офис</div><a class="s-contacts__location-btn" href="/upload/kievskaya.png">
                                    <svg class="ico ico-mono-download">
                                        <use xlink:href="img/sprite-mono.svg#ico-mono-download"></use>
                                    </svg>
                                    <div class="s-contacts__location-size">1.33 мб</div></a>
                            </div>
                            <div class="s-contacts__location-item">
                                <div class="s-contacts__location-title">Производство / склад</div><a class="s-contacts__location-btn" href="/upload/holmogori.png">
                                    <svg class="ico ico-mono-download">
                                        <use xlink:href="img/sprite-mono.svg#ico-mono-download"></use>
                                    </svg>
                                    <div class="s-contacts__location-size">518.47 кб</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-social">
        <div class="l-default">
            <div class="l-content">
                <div class="s-social__inner">
                    <div class="s-social__phone"><a class="s-social__phone-tel" href="tel:88005008886">8-800-500-88-86</a>
                        <div class="s-social__phone-btn btn-social">Позвонить</div>
                    </div>
                    <div class="s-social__send">
                        <div class="s-social__send-item phone"><a class="s-social__item-text" href="tel:88005008886">8-800-500-88-86</a><a class="s-social__phone-btn btn-social">Позвонить</a></div>
                        <div class="s-social__send-item support">
                            <div class="s-social__item-text">Обратитесь в службу технической поддержки</div><a class="s-social__item-btn btn-social">Написать</a>
                        </div>
                        <div class="s-social__send-item mail">
                            <div class="s-social__item-text">Свяжитесь с нами по электронной почте</div><a class="s-social__item-btn btn-social">Написать</a>
                        </div>
                    </div>
                    <div class="s-social__link">
                        <a class="s-social__link-item" href="javascript:void(0);"><img src="img/svg/tg.svg" alt="telegram"></a>
                        <a class="s-social__link-item" href="javascript:void(0);">  <img src="img/svg/vk.svg" alt="vk"></a>
                        <a class="s-social__link-item" href="javascript:void(0);"><img src="img/svg/youtube.svg" alt="youtube"></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-feedback">
        <div class="s-feedback__content">
            <div class="s-feedback__content-top">
                <div class="l-default">
                    <div class="s-feedback__item">
                        <div class="s-feedback__item-text">Остались вопросы? Свяжитесь с нами</div>
                    </div>
                    <div class="s-feedback__item">
                        <a class="s-feedback__item-btn" href="mailto:sale@graviton.ru"> Связаться с нами</a>
                    </div>
                </div>
            </div>
            <div class="s-feedback__content-bottom">
                <div class="l-default">
                    <div class="s-feedback__item">
                        <div class="s-feedback__item-note">*Вышеприведенные характеристики являются теоретическими величинами и зависят от дизайна продукта. Для предоставления точной информации об устройствах и для обеспечения ее соответствия с харакетристиками и функциями фактических продуктов компания Гравитон может вносить изменения в режиме реального времени. Сведения о продукции могут быть изменены без предварительного уведомления.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
