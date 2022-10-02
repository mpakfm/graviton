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
                <div class="timetable__top-content" data-timetable="events"><a class="timetable__link" href="">
                        <div class="timetable__link-text">Смотреть весь месяц</div>
                        <div class="timetable__link-icon"><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></div></a>
                    <div class="timetable__title">Список мероприятий компании Гравитон</div>
                </div>
                <div class="timetable__month">09</div>
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
                        <a class="calendar-events__item" href="">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number">02 </div>
                                    <div class="calendar-events__date-month">Августа</div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country">Абра кадабра</div>
                                    <div class="calendar-events__place-city">г. Москва</div>
                                </div>
                            </div>
                        </a>
                        <a class="calendar-events__item" href="">
                            <div class="calendar-events__photo">
                                <picture>
                                    <source data-srcset="img/events/1.webp" type="image/webp"/>
                                    <source data-srcset="img/events/1.jpg" type="image/jpg"/><img class="lazy" data-src="img/events/1.jpg" alt=""/>
                                </picture>
                            </div>
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number">09 </div>
                                    <div class="calendar-events__date-month">Августа</div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country">Баба Йети</div>
                                    <div class="calendar-events__place-city">г. Иваново</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="calendar-events__column">
                        <a class="calendar-events__item" href="">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number">11 </div>
                                    <div class="calendar-events__date-month">Августа</div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country">РИФ Кавказ</div>
                                    <div class="calendar-events__place-city">г. Махачкала</div>
                                </div>
                            </div>
                            <div class="calendar-events__photo">
                                <picture>
                                    <source data-srcset="img/events/1.webp" type="image/webp"/>
                                    <source data-srcset="img/events/1.jpg" type="image/jpg"/><img class="lazy" data-src="img/events/1.jpg" alt=""/>
                                </picture>
                            </div>
                        </a>
                    </div>
                    <div class="calendar-events__column">
                        <a class="calendar-events__item" href="">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number">14 </div>
                                    <div class="calendar-events__date-month">Августа</div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country">Вентура Имра Риа Кара</div>
                                    <div class="calendar-events__place-city">г. Иваново</div>
                                </div>
                            </div>
                            <div class="calendar-events__photo">
                                <picture>
                                    <source data-srcset="img/events/1.webp" type="image/webp"/>
                                    <source data-srcset="img/events/1.jpg" type="image/jpg"/><img class="lazy" data-src="img/events/1.jpg" alt=""/>
                                </picture>
                            </div>
                        </a>
                        <a class="calendar-events__item" href="">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number">19 </div>
                                    <div class="calendar-events__date-month">Августа</div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country">Зюзино</div>
                                    <div class="calendar-events__place-city">г. Москва</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="calendar-events__column">
                        <div class="calendar-events__col">
                            <a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">22 </div>
                                        <div class="calendar-events__date-month">Августа</div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country">Ялия ситти васка унц</div>
                                        <div class="calendar-events__place-city">г. Сить</div>
                                    </div>
                                </div></a><a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">23 </div>
                                        <div class="calendar-events__date-month">Августа</div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country">Аппа биарда</div>
                                        <div class="calendar-events__place-city">г. Санкт-Петербург</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="calendar-events__col">
                            <a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">24 </div>
                                        <div class="calendar-events__date-month">Августа</div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country">РИФ Кавказ</div>
                                        <div class="calendar-events__place-city">г. Махачкала</div>
                                    </div>
                                </div>
                            </a>
                            <a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">28 </div>
                                        <div class="calendar-events__date-month">Августа</div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country">РИФ Кавказ</div>
                                        <div class="calendar-events__place-city">г. Махачкала</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a class="calendar-events__item" href="">
                            <div class="calendar-events__info">
                                <div class="calendar-events__date">
                                    <div class="calendar-events__date-number">30 </div>
                                    <div class="calendar-events__date-month">Августа</div>
                                </div>
                                <div class="calendar-events__place">
                                    <div class="calendar-events__place-country">Слепцы отдыхают</div>
                                    <div class="calendar-events__place-city">пгт. Ант</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="timetable__item calendar-news" data-timetable="news">
                <div class="calendar-news__items">
                    <div class="calendar-news__item">
                        <div class="calendar-news__item-top">
                            <div class="calendar-news__date">
                                <div class="calendar-news__date-number">30</div>
                                <div class="calendar-news__date-month">августа</div>
                            </div>
                            <div class="calendar-news__info"><a class="calendar-news__more" href="">
                                    <div class="calendar-news__more-text">Подробее</div></a>
                                <div class="calendar-news__img">
                                    <picture>
                                        <source data-srcset="img/events/1.webp" type="image/webp"/>
                                        <source data-srcset="img/events/1.jpg" type="image/jpg"/><img class="lazy" data-src="img/events/1.jpg" alt=""/>
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="calendar-news__texts">
                            <div class="calendar-news__title">Российский разработчик “Альт” подтвердил совместимость с серверами Гравитон</div>
                            <div class="calendar-news__text">Компания «Базальт СПО» подтвердила совместимость ОС Альт Сервер 10 и ОС Альт Рабочая станция с серверами Гравитон.</div>
                        </div>
                    </div>
                    <div class="calendar-news__item">
                        <div class="calendar-news__item-top">
                            <div class="calendar-news__date">
                                <div class="calendar-news__date-number">30</div>
                                <div class="calendar-news__date-month">августа</div>
                            </div>
                            <div class="calendar-news__info"><a class="calendar-news__more" href="">
                                    <div class="calendar-news__more-text">Подробее</div></a>
                                <div class="calendar-news__img">
                                    <picture>
                                        <source data-srcset="img/events/1.webp" type="image/webp"/>
                                        <source data-srcset="img/events/1.jpg" type="image/jpg"/><img class="lazy" data-src="img/events/1.jpg" alt=""/>
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="calendar-news__texts">
                            <div class="calendar-news__title">Российский разработчик “Альт” подтвердил совместимость с серверами Гравитон</div>
                            <div class="calendar-news__text">Компания «Базальт СПО» подтвердила совместимость ОС Альт Сервер 10 и ОС Альт Рабочая станция с серверами Гравитон.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
