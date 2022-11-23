<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    03.10.2022
 * Time:    5:34
 */
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<main class="main">
    <section class="s-events-last s-events-last-detail">
        <div class="l-default">
            <div class="s-events-last__wrap">
                <div class="s-events-last__image"><img src="img/events-last/cover.jpg" alt=""></div>
                <h1 class="s-events-last__title">Микроэлект-<br>роника 2022</h1>
            </div>
            <div class="s-events-last__date"><span>Сочи,</span> 2 -  8 октября</div>
        </div>
    </section>
    <section class="s-events-description">
        <div class="l-default">
            <div class="s-events-description__wrapper">
                <div class="s-events-description__content">
                    <h2 class="s-events-description__title">“Гравитон” на форуме “Микроэлектроника 2022”</h2>
                    <div class="s-events-description__text">
                        <p>Представители “Гравитон” расскажут о клиентских решениях и материнских платах торговой марки на российском форуме “Микроэлектроника 2022”, который состоится в Сочи со 2 по 8 октября.</p>
                        <p>Форум “Микроэлектроника” - это площадка для ведения конструктивного диалога между научным сообществом, производственными объединениями и представителями бизнес-структур микроэлектронного кластера и смежных высокотехнологичных отраслей. В форуме принимают участие отечественные и зарубежные отраслевые предприятия, представители образовательных и научных учреждений.</p>
                        <p>На стенде “Гравитона” будет возможность познакомиться с клиентскими решениями: доступный и функциональный ноутбук Гравитон Н15-И, сверхлегкий и производительный ноутбук Гравитон Н14И-Т и универсальный моноблок класса “все в одном” с процессором двенадцатого поколения и приемлемой игровой производительностью - Гравитон М72И.</p>
                        <p>Гостям и участникам форума будут представлены системные платы для клиентских решений: системная плата для моноблоков и малоформатных персональных компьютеров “Ангара” на базе процессора “Байкал-М” и системные платы для настольных ПК “Кама” и “Печора”. Эти платы совместимы в том числе и с операционными системами, разработанными в России.</p>
                        <p>Отдельная часть экспозиции стенда будет посвящена серверным материнским платам собственной разработки.</p>
                        <p>Узнать больше о решениях “Гравитон” и пообщаться с представителями компании можно будет со 2 по 8 октября 2022 года на форуме “Микроэлектроника”, стенд 34.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-events-banner">
        <div class="l-default">
            <div class="s-events-banner__wrapper">
                <div class="s-events-banner__img"><img src="img/events-last/cover.jpg" alt=""></div>
                <h2 class="s-events-banner__title">«Это значительная ниша, которая пока не заполнена полностью»</h2>
            </div>
        </div>
    </section>
    <section class="s-events-btn">
        <div class="l-default">
            <div class="s-events-btn__wrapper">
                <h3 class="s-events-btn__title">Принять участие в мероприятии</h3>
                <div class="s-events-btn__container">
                    <div id="blackhole"><a class="centerHover" href="https://www.youtube.com/watch?v=fiKQ9yIvmfI"><span>Зарегистрироваться</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-events-slider"><div class='scroll-animations-example' data-scroll-container>
            <div class='scrollsection' data-scroll-section>
                <div class='item -normal' data-scroll data-scroll-speed="2">
                    <img class='image' src='https://picsum.photos/id/1005/300/400'>
                </div>
                <div class='item -big' data-scroll data-scroll-speed="1">
                    <img class='image' src='https://picsum.photos/id/1019/600/800'>
                </div>
                <div class='item -small -horizontal' data-scroll data-scroll-speed="4">
                    <img class='image' src='https://picsum.photos/id/1027/400/300'>
                </div>
                <div class='item -normal' data-scroll data-scroll-speed="3">
                    <img class='image' src='https://picsum.photos/id/1028/300/400'>
                </div>
                <div class='item -normal -horizontal' data-scroll data-scroll-speed="2">
                    <img class='image' src='https://picsum.photos/id/1041/400/300'>
                </div>
                <div class='item -big -horizontal' data-scroll data-scroll-speed="4">
                    <img class='image' src='https://picsum.photos/id/1042/800/600'>
                </div>
                <div class='item -small' data-scroll data-scroll-speed="2">
                    <img class='image' src='https://picsum.photos/id/1049/300/400'>
                </div>
                <div class='item -normal -horizontal' data-scroll data-scroll-speed="1">
                    <img class='image' src='https://picsum.photos/id/1056/300/400'>
                </div>
                <div class='item -small -horizontal' data-scroll data-scroll-speed="3">
                    <img class='image' src='https://picsum.photos/id/1062/400/300'>
                </div>
                <div class='item -big' data-scroll data-scroll-speed="1">
                    <img class='image' src='https://picsum.photos/id/1068/600/800'>
                </div>
                <div class='item -normal -horizontal' data-scroll data-scroll-speed="2">
                    <img class='image' src='https://picsum.photos/id/1069/400/300'>
                </div>
                <div class='item -normal -horizontal' data-scroll data-scroll-speed="1">
                    <img class='image' src='https://picsum.photos/id/1072/300/400'>
                </div>
                <div class='item -small -horizontal' data-scroll data-scroll-speed="4">
                    <img class='image' src='https://picsum.photos/id/1075/400/300'>
                </div>
                <div class='item -big' data-scroll data-scroll-speed="3">
                    <img class='image' src='https://picsum.photos/id/1081/600/800'>
                </div>
                <div class='item -normal -horizontal' data-scroll data-scroll-speed="2">
                    <img class='image' src='https://picsum.photos/id/111/400/300'>
                </div>
                <div class='item -small -horizontal' data-scroll data-scroll-speed="4">
                    <img class='image' src='https://picsum.photos/id/129/400/300'>
                </div>
                <div class='item -big' data-scroll data-scroll-speed="2">
                    <img class='image' src='https://picsum.photos/id/137/600/800'>
                </div>
                <div class='item -normal -horizontal' data-scroll data-scroll-speed="1">
                    <img class='image' src='https://picsum.photos/id/141/300/400'>
                </div>
                <div class='item -small -horizontal' data-scroll data-scroll-speed="3">
                    <img class='image' src='https://picsum.photos/id/145/400/300'>
                </div>
                <div class='item -normal' data-scroll data-scroll-speed="1">
                    <img class='image' src='https://picsum.photos/id/147/300/400'>
                </div>
            </div>
        </div>
        <div class="s-events-slider__more">
            <div class="s-events-slider__more-text">Венуться к списку мероприятий</div>
            <div class="s-events-slider__more-arrow"><svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 1H1L6.35135 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
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


<main class="main">
<section class="news-detail">
    <div class="l-default">
        <div class="l-content">
            <div class="news-detail__container">
                <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                    <div class="news-detail__date">
                        <div class="news-detail__date--day"><?=$arResult["DISPLAY_ACTIVE_FROM_DAY"]?> </div>
                        <div class="news-detail__date--month"><?=$arResult["DISPLAY_ACTIVE_FROM_MONTH"]?></div>
                    </div>
                <?endif;?>
                <div class="news-detail__content">
                    <div class="news-detail__content--img">
                        <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                            <div class="news-detail__topic">
                                <div class="news-detail__topic--day"><?=$arResult["DISPLAY_ACTIVE_FROM_DAY"]?> </div>
                                <div class="news-detail__topic--month"><?=$arResult["DISPLAY_ACTIVE_FROM_MONTH"]?></div>
                            </div>
                        <?endif;?>
                        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                            <picture>
                                <source data-srcset="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" type="image/jpg"/>
                                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="undefined"/>
                            </picture>
                        <?endif?>
                    </div>
                    <?php if ($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]) { ?>
                    <div class="news-detail__content--title"><?=$arResult["NAME"]?></div>
                    <?php } ?>
                    <div class="news-detail__content--text">
                        <?if($arResult["DETAIL_TEXT"] <> ''):?>
                            <?echo $arResult["DETAIL_TEXT"];?>
                        <?endif?>
                    </div>
                    <div class="news-detail__more">
                        <a class="news-detail__more--all" href="/events">
                            Вернуться к списку мероприятий
                            <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
<!--                        <div class="news-detail__more--btn">-->
<!--                            <a class="news-detail__btn--prev">-->
<!--                                <svg class="ico ico-color-arrow-circle">-->
<!--                                    <use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use>-->
<!--                                </svg>-->
<!--                            </a>-->
<!--                            <a class="news-detail__btn--next">-->
<!--                                <svg class="ico ico-color-arrow-circle">-->
<!--                                    <use xlink:href="img/sprite-color.svg#ico-color-arrow-circle"></use>-->
<!--                                </svg>-->
<!--                            </a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
