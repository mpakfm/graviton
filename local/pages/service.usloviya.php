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
use Library\Tools\Seo;

define("BODY_CLASS", "PAGE");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/legal_support_page.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/legal_support_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

$formServiceId  = CacheSelector::getFormId('SIMPLE_FORM_1');
$formResponceId = CacheSelector::getFormId('SIMPLE_FORM_2');

$iblock     = CacheSelector::getIblockId('pages', 'content');
$menuParams = [
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => $iblock,
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "PARENT_SECTION_CODE" => "support",
    "SET_TITLE" => "N",
    "SET_BROWSER_TITLE" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_META_DESCRIPTION" => "N",
    "CACHE_TYPE" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
];

$pageItem = CacheSelector::getIblockElement($iblock, 'garantiynye-usloviya');
Seo::setPage($iblock, $pageItem['ID']);

?>
    <main class="main">
        <?$APPLICATION->IncludeComponent("mpakfm:news.list","menu.support", $menuParams);?>
        <section class="s-banner">
            <div class="l-default">
                <div class="s-banner__title">
                    <h1 class="title title--h1-banner s-banner__title title--medium"><?=$pageItem['NAME'];?></h1>
                </div>
            </div>
            <div class="s-banner__img">
                <picture>
                    <source srcset="img/legal/banner.jpg" type="image/jpg" media="(min-width: 768px)"/>
                    <source srcset="img/legal/banner-small.jpg" type="image/jpg" media="(max-width: 768px)"/><img src="img/legal/banner.jpg" alt=""/>
                </picture>
            </div>
        </section>
        <section class="s-support-contact s-support-contact-legal">
            <div class="l-default">
                <div class="s-support-contact__top">
                    <div class="s-support-contact__caption">Поддержка</div>
                    <div class="s-support-contact__title">Требуется обслуживание или техническая поддержка? Заполните заявку онлайн, и мы вам поможем.</div>
                </div>
                <div class="s-support-contact__descriptions">
                    <div class="s-support-contact__subtitle">Если вы хотите сообщить о возможной контрафактной или поддельной продукции либо о других видах предполагаемого нарушения прав на интеллектуальную собственность Гравитон, сообщите о контрафактных продуктах или подделках.</div>
                    <div class="s-support-contact__description">
                        <?=$pageItem['DETAIL_TEXT'];?>
                    </div>
                </div>
                <div class="s-support-contact__content">

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
