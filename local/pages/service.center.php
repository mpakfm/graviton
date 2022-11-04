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

use Library\Tools\CacheSelector;

define("BODY_CLASS", "PAGE");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$formServiceId  = CacheSelector::getFormId('SIMPLE_FORM_1');
$formResponceId = CacheSelector::getFormId('SIMPLE_FORM_2');

?>
    <main class="main">
        <section class="news-detail" style="background-image: url(img/news/back.jpg)">
            <div class="l-default">
                <div class="l-content">
                    <div class="news-detail__container">

                        <div class="news-detail__content">
                            <div class="news-detail__content--title">Сервисные центры</div>
                            <div class="news-detail__content--text">
                                <p>Сеть сервисных центров осуществляет гарантийное и постгарантийное обслуживание вычислительной техники Гравитон на всей территории России.</p>
                                <p>Инженерная помощь осуществляется как в сервисных центрах, так и на месте эксплуатации - силами выездных специалистов</p>
                            </div>

                            <?$APPLICATION->IncludeComponent("bitrix:form.result.new","service",Array(
                                    "SEF_MODE" => "Y",
                                    "WEB_FORM_ID" => $formServiceId,
                                    "LIST_URL" => "/page/support/servesnye-tsentry",
                                    "EDIT_URL" => "/page/support/servesnye-tsentry",
                                    "SUCCESS_URL" => "",
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

                            <?$APPLICATION->IncludeComponent("bitrix:form.result.new","responce",Array(
                                    "SEF_MODE" => "Y",
                                    "WEB_FORM_ID" => $formResponceId,
                                    "LIST_URL" => "/page/support/servesnye-tsentry",
                                    "EDIT_URL" => "/page/support/servesnye-tsentry",
                                    "SUCCESS_URL" => "",
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
            </div>
        </section>
    </main>
<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
