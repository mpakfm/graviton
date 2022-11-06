<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    06.11.2022
 * Time:    16:29
 */
/** @var CMain $APPLICATION */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;

define("BODY_CLASS", "PAGE");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/drivers_page.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/drivers_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

$formServiceId  = CacheSelector::getFormId('SIMPLE_FORM_1');
$formResponceId = CacheSelector::getFormId('SIMPLE_FORM_2');

$iblock     = CacheSelector::getIblockId('pages', 'content');
$menuParams = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $iblock,
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "PARENT_SECTION_CODE" => "support",
    "CACHE_TYPE" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
];

$pageItem = CacheSelector::getIblockElement($iblock, 'zagruzka-drayverov');

\Mpakfm\Printu::info($pageItem)->title('$pageItem');

?>
    <main class="main">
        <?$APPLICATION->IncludeComponent("mpakfm:news.list","menu.support", $menuParams);?>
        <section class="s-banner">
            <div class="l-default">
                <div class="s-banner__title">
                    <h1 class="title title--h1-banner s-banner__title title--medium">Драйвера</h1>
                </div>
            </div>
            <div class="s-banner__img">
                <picture>
                    <source srcset="img/drivers/banner.jpg" type="image/jpg" media="(min-width: 768px)"/>
                    <source srcset="img/drivers/banner-small.jpg" type="image/jpg" media="(max-width: 768px)"/><img src="img/drivers/banner.jpg" alt=""/>
                </picture>
            </div>
        </section>
        <section class="s-drivers">
            <div class="l-default">
                <div class="s-drivers__text">Требуется обслуживание или техническая поддержка? Заполните заявку онлайн, и мы вам поможем.</div>
                <div class="s-drivers__caption">Обновление</div>
                <div class="s-drivers__content">
                    <div class="s-drivers__search">
                        <div class="s-drivers__search-input">
                            <input type="text" placeholder="Ноутбук">
                            <div class="s-drivers__search-icon">
                                <svg class="ico ico-mono-search">
                                    <use xlink:href="img/sprite-mono.svg#ico-mono-search"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="s-drivers__search-btn btn">Поиск</div>
                    </div>
                    <div class="s-drivers__tabs">
                        <div class="s-drivers__tab active" id="table-1">
                            <div class="s-drivers__tab-text">Клиентские решения</div>
                        </div>
                        <div class="s-drivers__tab" id="table-2">
                            <div class="s-drivers__tab-text">Серверные решения</div>
                        </div>
                    </div>
                    <div class="s-drivers__tables">
                        <div class="s-drivers__table active" id="table-1">
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                        </div>
                        <div class="s-drivers__table" id="table-2">
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                            <div class="s-drivers__table-item">
                                <div class="s-drivers__table-text">Руководство пользователя</div><a class="s-drivers__table-right" href="" download>
                                    <div class="s-drivers__table-icon">
                                        <svg class="ico ico-mono-icon-download">
                                            <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                                        </svg>
                                    </div>
                                    <div class="s-drivers__table-weight">76 МБ</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="l-default">
            <form class="s-support-form s-support-form-drivers form">
                <div class="s-support-form__title">Запросить дополнительный драйвер</div>
                <div class="s-support-form__columns">
                    <div class="s-support-form__inputs">
                        <div class="s-support-form__column">
                            <div class="form__title">Контакты</div>
                            <div class="form__inputs">
                                <div class="form__input">
                                    <label>E-mail</label>
                                    <input type="email" placeholder="Введите реальный E-mail на него придет письмо  подтверждения">
                                </div>
                                <div class="form__input">
                                    <label>ФИО</label>
                                    <input type="text" placeholder="Введите фамилию имя и отвечтво">
                                </div>
                                <div class="form__input">
                                    <label>Телефон</label>
                                    <input type="email" placeholder="+7(ХХХ)ХХХХХХХ">
                                </div>
                            </div>
                        </div>
                        <div class="s-support-form__column">
                            <div class="form__title">Оборудование</div>
                            <div class="form__inputs">
                                <div class="form__input">
                                    <label>Серийный номер</label>
                                    <input type="text" placeholder="0000000000000-0000">
                                </div>
                                <div class="form__textarea">
                                    <label>Вопрос</label>
                                    <textarea type="text" placeholder="Введите ваш вопрос"></textarea>
                                </div>
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
                                    <label>Позвоните нам</label><span> 8 800 551-75-75</span></a><a class="s-support-form__contacts-email" href="mailto:sc@3l.ru">
                                    <label>Напишите нам</label><span>sc@3l.ru</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="s-support-form__bottom">
                    <div class="s-support-form__bottom-left">
                        <div class="s-support-form__bottom-item">
                            <div class="form__checkbox">
                                <input class="form__checkbox-input" type="checkbox">
                                <div class="form__checkbox-btn"></div>
                                <div class="form__checkbox-text">Я согласен на обработку персональных данных</div>
                            </div>
                        </div>
                        <div class="s-support-form__bottom-item">
                            <button class="form__submit btn" type="submit">Отправить</button>
                        </div>
                    </div>
                    <div class="s-support-form__contacts-message s-support-form__bottom-item">Круглосуточно по всей России</div>
                </div>
            </form>
        </div>
        <div class="s-feedback">
            <div class="s-feedback__content">
                <div class="s-feedback__content-top">
                    <div class="l-default">
                        <div class="s-feedback__item">
                            <div class="s-feedback__item-text">Остались вопросы? Свяжитесь с нами</div>
                        </div>
                        <div class="s-feedback__item"><a class="s-feedback__item-btn" href="mailto:sale@graviton.ru"> Связаться с нами</a></div>
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
        </div>
    </main>
<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
