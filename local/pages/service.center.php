<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    11.09.2022
 * Time:    22:16
 * @var CMain $APPLICATION
 * @var string $SECTION
 * @var string $CODE
 */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;

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
    "CACHE_TYPE" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
];

$pageItem = CacheSelector::getIblockElement($iblock, 'servisnye-tsentry');

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
        <section>
            <?php

            $letters = \Library\Tools\ServiceLetters::getLetters();
            $cities = \Library\Tools\ServiceLetters::getCities();
            $full = \Library\Tools\ServiceLetters::getFull();

            ?>
            <script>
            let letters = <?=json_encode($letters);?>;
            let cities = <?=json_encode($cities);?>;
            let full = <?=json_encode($full);?>;
            console.log(letters);
            console.log(cities);
            console.log(full);
            </script>
        </section>
        <section class="s-support-contact s-support-contact-legal">
            <div class="l-default">
                <div class="s-support-contact__top">
                    <div class="s-support-contact__caption">Поддержка</div>
                    <div class="s-support-contact__title">Требуется обслуживание или техническая поддержка? Заполните заявку онлайн, и мы вам поможем.</div>
                </div>
                <div class="s-support-contact__descriptions">
                    <div class="s-support-contact__subtitle">Если вы хотите сообщить о возможной контрафактной или поддельной продукции либо о других видах предполагаемого нарушения прав на интеллектуальную собственность Гравитон, сообщите о контрафактных продуктах или подделках.</div>
                    <div class="s-support-contact__description">Если вы хотите сообщить о возможной контрафактной или поддельной продукции либо о других видах предполагаемого нарушения прав на интеллектуальную собственность Гравитон, сообщите о контрафактне.</div>
                </div>
                <div class="s-support-contact__content">
                    <?$APPLICATION->IncludeComponent("bitrix:form.result.new","service",Array(
                    "SEF_MODE" => "Y",
                    "WEB_FORM_ID" => $formServiceId,
                    "LIST_URL" => "/page/" . Breadcrumb::$uri,
                    "EDIT_URL" => Breadcrumb::$uri,
                    "SUCCESS_URL" => Breadcrumb::$uri,
                    "CHAIN_ITEM_TEXT" => "",
                    "CHAIN_ITEM_LINK" => "",
                    "IGNORE_CUSTOM_TEMPLATE" => "Y",
                    "USE_EXTENDED_ERRORS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "SEF_FOLDER" => "/",
                    "VARIABLE_ALIASES" => Array(
                    )
                    )
                    );?>
                </div>
            </div>
        </section>
        <section class="s-support-contact s-support-contact-legal">
            <div class="l-default">
                <div class="s-support-contact__content">
                    <div class="news-detail__content">
                        <div class="news-detail__content--title">Сервисные центры</div>
                        <div class="news-detail__content--text">
                            <p>Сеть сервисных центров осуществляет гарантийное и постгарантийное обслуживание вычислительной техники Гравитон на всей территории России.</p>
                            <p>Инженерная помощь осуществляется как в сервисных центрах, так и на месте эксплуатации - силами выездных специалистов</p>
                        </div>

                        <?$APPLICATION->IncludeComponent("bitrix:form.result.new","responce",Array(
                                "SEF_MODE" => "Y",
                                "WEB_FORM_ID" => $formResponceId,
                                "LIST_URL" => "/page/" . Breadcrumb::$uri,
                                "EDIT_URL" => Breadcrumb::$uri,
                                "SUCCESS_URL" => Breadcrumb::$uri,
                                "CHAIN_ITEM_TEXT" => "",
                                "CHAIN_ITEM_LINK" => "",
                                "IGNORE_CUSTOM_TEMPLATE" => "Y",
                                "USE_EXTENDED_ERRORS" => "Y",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "3600",
                                "SEF_FOLDER" => "/",
                                "VARIABLE_ALIASES" => Array(
                                )
                            )
                        );?>
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
