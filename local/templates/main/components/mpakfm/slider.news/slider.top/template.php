<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    01.10.2022
 * Time:    2:18
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
<section class="timetable">
    <div class="timetable__top">
        <div class="l-default">
            <div class="timetable__top-container">
                <div class="timetable__tabs">
                    <div class="timetable__tabs-items">
                        <div class="timetable__tab active" data-timetable="events">Мероприятия</div>
                        <div class="timetable__tab" data-timetable="news">Новости</div>
                    </div>
                </div>
                <div class="timetable__top-content" data-timetable="events">
                    <a class="timetable__link" href="/events">
                        <div class="timetable__link-text">Смотреть весь месяц
                            <div class="timetable__link-icon"><img src="img/svg/arrow-half.svg" alt=""></div>
                        </div>
                    </a>
                    <div class="timetable__title">Список мероприятий компании Гравитон</div>
                </div>
                <div class="timetable__month"><?=$arResult['curDate']->format('m');?></div>
            </div>
        </div>
    </div>
    <div class="l-default">
        <div class="timetable__items">
            <div class="timetable__tabs-active">
                <div class="timetable__tabs-result">Мероприятия</div>
            </div>
            <div class="timetable__item calendar-events" data-timetable="events">
                <div class="calendar-events__items">
                    <div class="calendar-events__column">
                        <?php if (array_key_exists(0, $arResult['EVENTS'])) { ?>
                        <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][0]['CODE'];?>">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number"><?=$arResult['EVENTS'][0]['DAY'];?> </div>
                                    <div class="calendar-events__date-month"><?=$arResult['EVENTS'][0]['MONTH'];?></div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country"><?=$arResult['EVENTS'][0]['NAME'];?></div>
                                    <div class="calendar-events__place-city"><?=$arResult['EVENTS'][0]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                        <?php if (array_key_exists(1, $arResult['EVENTS'])) { ?>
                        <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][1]['CODE'];?>">
                            <div class="calendar-events__photo">
                                <picture>
                                    <!--<source data-srcset="img/events/1.webp" type="image/webp"/>-->
                                    <?php if (array_key_exists('SRC', $arResult['EVENTS'][1]['PREVIEW_PICTURE'])) { ?>
                                    <source data-srcset="<?=$arResult['EVENTS'][1]['PREVIEW_PICTURE']['SRC'];?>" type="image/jpg"/>
                                    <img src="<?=$arResult['EVENTS'][1]['PREVIEW_PICTURE']['SRC'];?>" alt=""/>
                                    <?php } ?>
                                </picture>
                            </div>
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number"><?=$arResult['EVENTS'][1]['DAY'];?> </div>
                                    <div class="calendar-events__date-month"><?=$arResult['EVENTS'][1]['MONTH'];?></div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country"><?=$arResult['EVENTS'][1]['NAME'];?></div>
                                    <div class="calendar-events__place-city"><?=$arResult['EVENTS'][1]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="calendar-events__column">
                        <?php if (array_key_exists(2, $arResult['EVENTS'])) { ?>
                        <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][2]['CODE'];?>">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number"><?=$arResult['EVENTS'][2]['DAY'];?> </div>
                                    <div class="calendar-events__date-month"><?=$arResult['EVENTS'][2]['MONTH'];?></div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country"><?=$arResult['EVENTS'][2]['NAME'];?></div>
                                    <div class="calendar-events__place-city"><?=$arResult['EVENTS'][2]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                </div>
                            </div>
                            <div class="calendar-events__photo">
                                <picture>
                                    <?php if (array_key_exists('SRC', $arResult['EVENTS'][2]['PREVIEW_PICTURE'])) { ?>
                                    <!--<source data-srcset="img/events/1.webp" type="image/webp"/>-->
                                    <source data-srcset="<?=$arResult['EVENTS'][2]['PREVIEW_PICTURE']['SRC'];?>" type="image/jpg"/>
                                    <img src="<?=$arResult['EVENTS'][2]['PREVIEW_PICTURE']['SRC'];?>" alt=""/>
                                    <?php } ?>
                                </picture>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="calendar-events__column">
                        <?php if (array_key_exists(3, $arResult['EVENTS'])) { ?>
                        <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][3]['CODE'];?>">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number"><?=$arResult['EVENTS'][3]['DAY'];?> </div>
                                    <div class="calendar-events__date-month"><?=$arResult['EVENTS'][3]['MONTH'];?></div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country"><?=$arResult['EVENTS'][3]['NAME'];?></div>
                                    <div class="calendar-events__place-city"><?=$arResult['EVENTS'][3]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                </div>
                            </div>
                            <div class="calendar-events__photo">
                                <picture>
                                    <!--<source data-srcset="img/events/1.webp" type="image/webp"/>-->
                                    <?php if (array_key_exists('SRC', $arResult['EVENTS'][3]['PREVIEW_PICTURE'])) { ?>
                                    <source data-srcset="<?=$arResult['EVENTS'][3]['PREVIEW_PICTURE']['SRC'];?>" type="image/jpg"/>
                                    <img src="<?=$arResult['EVENTS'][3]['PREVIEW_PICTURE']['SRC'];?>" alt=""/>
                                    <?php } ?>
                                </picture>
                            </div>
                        </a>
                        <?php } ?>
                        <?php if (array_key_exists(4, $arResult['EVENTS'])) { ?>
                        <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][4]['CODE'];?>">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number"><?=$arResult['EVENTS'][4]['DAY'];?> </div>
                                    <div class="calendar-events__date-month"><?=$arResult['EVENTS'][4]['MONTH'];?></div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country"><?=$arResult['EVENTS'][4]['NAME'];?></div>
                                    <div class="calendar-events__place-city"><?=$arResult['EVENTS'][4]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="calendar-events__column">
                        <div class="calendar-events__col">
                            <?php if (array_key_exists(5, $arResult['EVENTS'])) { ?>
                            <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][5]['CODE'];?>">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number"><?=$arResult['EVENTS'][5]['DAY'];?> </div>
                                        <div class="calendar-events__date-month"><?=$arResult['EVENTS'][5]['MONTH'];?></div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country"><?=$arResult['EVENTS'][5]['NAME'];?></div>
                                        <div class="calendar-events__place-city"><?=$arResult['EVENTS'][5]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                            <?php if (array_key_exists(6, $arResult['EVENTS'])) { ?>
                            <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][6]['CODE'];?>">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number"><?=$arResult['EVENTS'][6]['DAY'];?> </div>
                                        <div class="calendar-events__date-month"><?=$arResult['EVENTS'][6]['MONTH'];?></div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country"><?=$arResult['EVENTS'][6]['NAME'];?></div>
                                        <div class="calendar-events__place-city"><?=$arResult['EVENTS'][6]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="calendar-events__col">
                            <?php if (array_key_exists(7, $arResult['EVENTS'])) { ?>
                            <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][7]['CODE'];?>">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number"><?=$arResult['EVENTS'][7]['DAY'];?> </div>
                                        <div class="calendar-events__date-month"><?=$arResult['EVENTS'][7]['MONTH'];?></div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country"><?=$arResult['EVENTS'][7]['NAME'];?></div>
                                        <div class="calendar-events__place-city"><?=$arResult['EVENTS'][7]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                            <?php if (array_key_exists(8, $arResult['EVENTS'])) { ?>
                            <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][8]['CODE'];?>">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number"><?=$arResult['EVENTS'][8]['DAY'];?> </div>
                                        <div class="calendar-events__date-month"><?=$arResult['EVENTS'][8]['MONTH'];?></div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country"><?=$arResult['EVENTS'][8]['NAME'];?></div>
                                        <div class="calendar-events__place-city"><?=$arResult['EVENTS'][8]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                        <?php if (array_key_exists(9, $arResult['EVENTS'])) { ?>
                        <a class="calendar-events__item" href="/events/<?=$arResult['EVENTS'][9]['CODE'];?>">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number"><?=$arResult['EVENTS'][9]['DAY'];?> </div>
                                    <div class="calendar-events__date-month"><?=$arResult['EVENTS'][9]['MONTH'];?></div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country"><?=$arResult['EVENTS'][9]['NAME'];?></div>
                                    <div class="calendar-events__place-city"><?=$arResult['EVENTS'][9]['PROPERTY_TOP_PLACE_VALUE'];?></div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="timetable__item calendar-news" data-timetable="news">
                <div class="calendar-news__items">
                    <?php foreach ($arResult['NEWS'] as $arItem) { ?>
                        <div class="calendar-news__item">
                            <div class="calendar-news__item-top">
                                <div class="calendar-news__date">
                                    <div class="calendar-news__date-number"><?=$arItem['DAY'];?></div>
                                    <div class="calendar-news__date-month"><?=$arItem['MONTH'];?></div>
                                </div>
                                <div class="calendar-news__info">
                                    <a class="calendar-news__more" href="/news/<?=$arItem['CODE'];?>">
                                        <div class="calendar-news__more-text">Подробнее</div>
                                    </a>
                                    <?php if ($arItem['IMG']) { ?>
                                    <div class="calendar-news__img">
                                        <picture>
                                            <!--<source data-srcset="img/events/1.webp" type="image/webp"/>-->
                                            <source data-srcset="<?=$arItem['IMG'];?>" type="image/jpg"/>
                                            <img src="<?=$arItem['IMG'];?>" alt=""/>
                                        </picture>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="calendar-news__texts">
                                <div class="calendar-news__title"><?=$arItem['NAME'];?></div>
                                <div class="calendar-news__text"><?=$arItem['PREVIEW_TEXT'];?></div>
                            </div>
                        </div>
                    <?php } ?>

                    <!--<div class="calendar-news__item">
                        <div class="calendar-news__item-top">
                            <div class="calendar-news__date">
                                <div class="calendar-news__date-number">30</div>
                                <div class="calendar-news__date-month">августа</div>
                            </div>
                            <div class="calendar-news__info"><a class="calendar-news__more" href="">
                                    <div class="calendar-news__more-text">Подробнее</div></a>
                                <div class="calendar-news__img">
                                    <picture>
                                        <source data-srcset="img/events/1.webp" type="image/webp"/>
                                        <source data-srcset="img/events/1.jpg" type="image/jpg"/><img src="img/events/1.jpg" alt=""/>
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="calendar-news__texts">
                            <div class="calendar-news__title">Российский разработчик “Альт” подтвердил совместимость с серверами Гравитон</div>
                            <div class="calendar-news__text">Компания «Базальт СПО» подтвердила совместимость ОС Альт Сервер 10 и ОС Альт Рабочая станция с серверами Гравитон.</div>
                        </div>
                    </div>-->

                </div>
            </div>
            <div class="timetable__mobile"></div>
        </div>
    </div>
</section>
