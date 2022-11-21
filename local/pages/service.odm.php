<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    08.11.2022
 * Time:    1:14
 * @var CMain $APPLICATION
 */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;
use Library\Tools\Seo;

define("BODY_CLASS", "SERVICE-ODM");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/service_page.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/service_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

$iblock     = CacheSelector::getIblockId('pages', 'content');
$menuParams = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $iblock,
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "PARENT_SECTION_CODE" => "services",
    "SET_TITLE" => "N",
    "SET_BROWSER_TITLE" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_META_DESCRIPTION" => "N",
    "CACHE_TYPE" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
];

$pageItem = CacheSelector::getIblockElement($iblock, 'kontraktnaya-razrabotka');
Seo::setPage($iblock, $pageItem['ID']);

?>
    <main class="main">
        <?$APPLICATION->IncludeComponent("mpakfm:news.list","menu.service", $menuParams);?>
        <section class="s-banner">
            <div class="l-default">
                <div class="s-banner__title">
                    <h1 class="title title--h1-banner s-banner__title title--small">Полный цикл контрактной разработки цифровых устройств с учетом любых технических требований. </h1>
                </div>
            </div>
            <div class="s-banner__img">
                <picture>
                    <source srcset="img/services/banner.jpg" type="image/jpg" media="(min-width: 768px)"/>
                    <source srcset="img/services/banner-small.jpg" type="image/jpg" media="(max-width: 768px)"/><img src="img/services/banner.jpg" alt=""/>
                </picture>
            </div>
        </section>
        <section class="s-service">
            <div class="l-default">
                <h2 class="title title--h2 s-service__title">Контрактная разработка / ODM</h2>
                <div class="s-service__subtitle">Компания ГРАВИТОН осуществляет полный цикл контрактной разработки цифровых устройств с учетом любых технических требований.</div>
                <div class="s-service__caption">Полный</div>
            </div>
        </section>
        <section class="s-service-work">
            <div class="l-default">
                <div class="s-service-work__wrapper">
                    <div class="s-service-work__title">Работая с нами, вы получаете:</div>
                    <div class="s-service-work__items">
                        <div class="s-service-work__item">Минимизацию временных затрат на вывод нового продукта на рынок.</div>
                        <div class="s-service-work__item">Компетенцию и экспертизу высококвалифицированных специалистов.</div>
                        <div class="s-service-work__item">Возможность уделять больше внимания позиционированию компании на рынке.</div>
                        <div class="s-service-work__item">Страховку от рисков, связанных с процессами разработки и обеспечением качественно нового уровня будущего продукта.</div>
                        <div class="s-service-work__item">Разработку собственной концепции ключевого продукта и реализацию ваших проектов.</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s-services-cards">
            <div class="l-default">
                <h2 class="title title--h2 s-services-cards__title">ГРАВИТОН берет на себя весь цикл контрактной разработки, который включает в себя следующие этапы:</h2>
                <div class="s-services-cards__items">
                    <!--<div class="s-services-cards__btn"><a class="btn btn--bordered" href="#popup-registration" data-fancybox>Стать партнером</a></div>-->
                    <div class="service-card">
                        <div class="service-card__number">1</div>
                        <div class="service-card__text">Подготовка материала для грамотного написания технического задания нашими специалистами. Доработка технического задания.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">2</div>
                        <div class="service-card__text">Аналитика ниши на предмет конкурентной способности ключевого продукта.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">3</div>
                        <div class="service-card__text">Выстраивание правильного позиционирования ключевого продукта в нише.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">4</div>
                        <div class="service-card__text">Подбор аппаратной платформы и необходимых компонентов. Поиск и подбор компонентной базы CPU, GPU, ASIC, FPGA и остальные ключевые компоненты.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">5</div>
                        <div class="service-card__text">Закрытие схемотехнических аспектов, таких как поиск и формирование BOM листа, определение Pick&amp;Place элементов. Просчет электросовместимости излучению, TDP и т.д.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">6</div>
                        <div class="service-card__text">Разработка программного обеспечения с проработкой базового окружения, создание необходимых библиотек, реализация сервисов и служб, организацию взаимодействия между отдельными системами.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">7</div>
                        <div class="service-card__text">Тестирование программного обеспечения на опытных образцах с целью минимизации времени разработки на тестовых стендах.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">8</div>
                        <div class="service-card__text">Промышленный дизайн плат, трассировка, подбор совместимых материалов, крепежные расчеты.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">9</div>
                        <div class="service-card__text">Конструкторская разработка корпуса с учетом массогабаритных и прочностных характеристик. Учет удобства сборки, обслуживания и кабель менеджмента. Возможность подобрать готовое решение.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">10</div>
                        <div class="service-card__text">Выпуск прототипа и его первый запуск с тестированием на специальных стендах с выявлением узких мест.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">11</div>
                        <div class="service-card__text">Подготовка конструкторской, программной и технологической документации, паспорт изделия, руководство по эксплуатации, ТУ. Рабоче-конструкторская документация для подачи в ТПП.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">12</div>
                        <div class="service-card__text">Брендирование - добавление логотипа в БИОС, внесение цветового изменения в корпуса.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">13</div>
                        <div class="service-card__text">Производство опытных образцов и последующая проработка изделия для подготовки к серийному выпуску. С учетом высоких требования к современной эргономики и дизайну.</div>
                    </div>
                </div>
            </div>
        </section>
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
