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

define("BODY_CLASS", "SERVICE-OEM");

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
    "CACHE_TYPE" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
];

$pageItem = CacheSelector::getIblockElement($iblock, 'oem');

?>
    <main class="main">
        <?$APPLICATION->IncludeComponent("mpakfm:news.list","menu.service", $menuParams);?>
        <section class="s-banner">
            <div class="l-default">
                <div class="s-banner__title">
                    <h1 class="title title--h1-banner s-banner__title title--medium">Современные технологии в ваших руках</h1>
                </div>
            </div>
            <div class="s-banner__img">
                <picture>
                    <source srcset="img/services/banner-2.jpg" type="image/jpg" media="(min-width: 768px)"/>
                    <source srcset="img/services/banner-2-small.jpg" type="image/jpg" media="(max-width: 768px)"/><img src="img/services/banner-2.jpg" alt=""/>
                </picture>
            </div>
        </section>
        <section class="s-service">
            <div class="l-default">
                <h2 class="title title--h2 s-service__title">OEM - решения</h2>
                <div class="s-service__subtitle">Воспользуйтесь доступным по требованию решением, которое во всем соответствует ключевым стандартам вашей продукции. В ваших руках будут современные технологии, эффективная поддержка и сервис, а также гибкое программное обеспечение. Раздвиньте конкурентные рамки и начните играть по собственным правилам вместе с нашими OEM-решениями при поддержке лидера отрасли.</div>
                <div class="s-service__description">Для компаний которые работают на рынке вычислительной техники с государственными заказчимками</div>
                <div class="s-service__caption">Решение</div>
            </div>
        </section>
        <section class="s-services-cards">
            <div class="l-default">
                <h2 class="title title--h2 s-services-cards__title">Мы предлагаем</h2>
                <div class="s-services-cards__items">
                    <div class="s-services-cards__texts">
                        <div class="s-services-cards__texts-title">Зарабатывай с нами</div>
                        <div class="s-services-cards__texts-p">
                            <p>Получите продукт, который успешно работает не только сегодня, но и когда потребности в бизнесе и технологиях изменяться.</p>
                            <p>Наши специалисты проанализируют целевые потребности и поставленные задачи, чтобы помочь сохранить высокий темп роста вашего бизнеса вместе с ГРАВИТОН.</p>
                        </div>
                        <div class="s-services-cards__texts-btn"><a class="btn btn--bordered" href="#popup-registration" data-fancybox>Стать партнером</a></div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">1</div>
                        <div class="service-card__text">Готовые ресурсы и услуги, которые будут адаптированы под вас, с высоким уровнем доверия, для быстрого и эффективного вывода своих решений на рынок.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">2</div>
                        <div class="service-card__text">Выверенные инструменты для управления вашим продуктом – от разработки концепции до выпуска на рынок и обслуживания на протяжении всего срока эксплуатации.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">3</div>
                        <div class="service-card__text">Широкий ассортимент продуктов в отрасли. Кастомизация с использованием ваших корпоративных цветов и логотипа.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">4</div>
                        <div class="service-card__text">Быстрая и простая интеграция OEM-продуктов в ваш ИТ ландшафт.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">5</div>
                        <div class="service-card__text">Гарантия доступности продукта на протяжении 5-летнего срока эксплуатации, вариативность перехода с одного продукта на другой без потери стабильности.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">6</div>
                        <div class="service-card__text">Помощь в планировании изменений и подготовке к внедрению продуктов следующего поколения без отрыва от производства и остановки бизнеса.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">7</div>
                        <div class="service-card__text">Спектр заводских услуг, включающих в себя: предварительную настройку и загрузку программного обеспечения на этапе сборки.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">8</div>
                        <div class="service-card__text">Оперативную логистику за счет нескольких производственных объектов для оптимизации затрат.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">9</div>
                        <div class="service-card__text">Экспертных консультантов и технических специалистов для определения уникальных стратегических потребностей своей компании или компании клиента.</div>
                    </div>
                    <div class="service-card">
                        <div class="service-card__number">10</div>
                        <div class="service-card__text">Непревзойдённую систему поддержки 24/7 с гибкими пакетными решениями специально разработанные, для вас. Строгое соблюдение политики «послепродажного обслуживания», полностью удовлетворит вас и поможет двигаться бизнесу к поставленным целям.</div>
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
