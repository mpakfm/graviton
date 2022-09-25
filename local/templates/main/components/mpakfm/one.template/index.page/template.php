<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    24.09.2022
 * Time:    1:36
 */
/** @var $APPLICATION */
/** @var CUser $USER */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<main class="main">
    <div class="popup popup-form popup-registration" id="popup-registration">
        <form class="form">
            <h5 class="form__title">Форма регистрации</h5>
            <div class="form__inputs">
                <div class="form__input">
                    <label>E-mail </label>
                    <input type="email" placeholder="Введите реальный E-mail на него придет письмо  подтверждения" name="email">
                </div>
                <div class="form__input">
                    <label>ФИО</label>
                    <input type="text" placeholder="Введите фамилию, имя и отчество" name="name">
                </div>
                <div class="form__input">
                    <label>Телефон </label>
                    <input type="text" placeholder="+7(ХХХ)ХХХХХХХ" name="phone">
                </div>
                <div class="form__input">
                    <label>ИНН</label>
                    <input type="number" placeholder="9999999999" name="inn">
                </div>
                <div class="form__input">
                    <label>Название компании </label>
                    <input type="text" placeholder="Введите название компании" name="company">
                </div>
            </div>
            <div class="form__checkboxes">
                <div class="form__checkbox">
                    <input class="form__checkbox-input" type="checkbox">
                    <div class="form__checkbox-btn"></div>
                    <div class="form__checkbox-text">Я не робот</div>
                </div>
                <div class="form__checkbox">
                    <input class="form__checkbox-input" type="checkbox">
                    <div class="form__checkbox-btn"></div>
                    <div class="form__checkbox-text">Я согласен с условиями обработки персональных данных.</div>
                </div>
            </div>
            <button class="form__submit btn btn--black" type="submit">Отправить</button>
        </form>
    </div>
    <section class="main-top">
        <h1 class="title title--h1 title--fade fancy">СДЕЛАНО В РОССИИ </h1>
        <div class="main-top__notebook">
            <div class="main-top__notebook-img">
                <picture>
<!--                    <source data-srcset="img/main-top/notebook.webp" type="image/webp"/>-->
                    <source src="img/main-top/notebook.webp" type="image/webp"/>
<!--                    <source data-srcset="img/main-top/notebook.png" type="image/png"/>-->
                    <source src="img/main-top/notebook.png" type="image/png"/>
<!--                    <img class="lazy" data-src="img/main-top/notebook.png" alt=""/>-->
                    <img src="img/main-top/notebook.png" alt=""/>
                </picture>
            </div>
            <video class="main-top__notebook-video lazy" autoplay="autoplay" loop="loop" preload="auto" muted>
                <source data-src="videos/1.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
            </video><a class="main-top__more" href="">
                <div class="main-top__more-text">Подробнее о продукте</div>
                <div class="main-top__more-icon">
                    <svg class="ico ico-mono-arrow-more">
                        <use xlink:href="img/sprite-mono.svg#ico-mono-arrow-more"></use>
                    </svg>
                </div></a>
        </div>
        <div class="main-top__bottom">
            <div class="main-top__bottom-text">В центре притяжения Российских технологий </div>
        </div>
    </section>
    <section class="characteristics">
        <div class="l-default">
            <div class="characteristics__img"> <img class="lazy" data-src="img/svg/tube.svg" alt=""></div>
            <div class="characteristics__items">
                <div class="characteristics__item">
                    <div class="characteristics__item-content">
                        <div class="characteristics__item-top">
                            <div class="characteristics__item-icon">
                                <svg class="ico ico-mono-rus">
                                    <use xlink:href="img/sprite-mono.svg#ico-mono-rus"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="characteristics__item-text">
                            <p>Типовые и специализированные комплексные решения</p>
                            <p>От пользовательских систем для выполнения офисных задач</p>
                            <p>До автоматизированных комплексов управления предприятиями и систем «умный город»</p>
                        </div>
                    </div>
                </div>
                <div class="characteristics__item">
                    <div class="characteristics__item-top">
                        <div class="characteristics__item-number">5</div>
                        <div class="characteristics__item-title">лет на рынке</div>
                    </div>
                    <div class="characteristics__item-content">
                        <div class="characteristics__item-text">
                            <p>Разработчик и производитель отечественной вычислительной техники</p>
                            <p>Один из лидеров в области импортозамещения </p>
                            <p>Клиентские и корпоративные решения на базе различных архитектур</p>
                        </div>
                    </div>
                </div>
                <div class="characteristics__item">
                    <div class="characteristics__item-top">
                        <div class="characteristics__item-number">48+</div>
                        <div class="characteristics__item-title">уникальных разработок</div>
                    </div>
                    <div class="characteristics__item-content">
                        <div class="characteristics__item-text">
                            <p>Анализ задач и разработка концепта</p>
                            <p>Разработка схемотехнического решения</p>
                            <p>Производство и авторский надзор</p>
                            <p>Производство и авторский надзор</p>
                        </div>
                    </div>
                </div>
                <div class="characteristics__item">
                    <div class="characteristics__item-top">
                        <div class="characteristics__item-number">26+</div>
                        <div class="characteristics__item-title">в реестре Минпромторг</div>
                    </div>
                    <div class="characteristics__item-content">
                        <div class="characteristics__item-text">
                            <p>Продукция внесена в Единый реестр российской радиоэлектронной продукции Минпромторга России, сертифицирована ТР ТС, МПТ, РЭП, Минкомсвязи.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="l-default">
            <div class="products__sliders-container">
                <div class="products__sliders">
                    <div class="products__slider__mobile" data-category="client"></div>
                    <div class="products__slider swiper-container" data-category="client">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-wrapper">
                            <div class="product swiper-slide">
                                <div class="product__top">
                                    <div class="product__top-caption">
                                        <div class="product__top-text">Моно</div>
                                    </div>
                                    <div class="product__img">
                                        <picture>
                                            <source data-srcset="img/product/1.webp" type="image/webp"/>
                                            <source data-srcset="img/product/1.png" type="image/png"/><img class="lazy" data-src="img/product/1.png" alt=""/>
                                        </picture>
                                    </div>
                                </div>
                                <div class="product__info">
                                    <div class="product__subtitle">Высокая производительность в эргономичном исполнении</div>
                                    <div class="product__info-columns">
                                        <div class="product__info-column">
                                            <div class="product__name">Моноблоки</div><a class="product__link" href=""><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-title">Описание</div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Оперативная память</div>
                                                <div class="product__info-text">до 64 Гбайт</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Накопители</div>
                                                <div class="product__info-text">До двух накопителей 2,5” HDD/SSD SATA</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Процессор</div>
                                                <div class="product__info-text">Intel® Core™ 8 и 9 поколений</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Дисплей</div>
                                                <div class="product__info-text">23,8-дюймовый IPS FHD</div>
                                            </div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-description">Идеальное решение для создания автоматизированного рабочего места</div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__made">Разработано в России</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product swiper-slide">
                                <div class="product__top">
                                    <div class="product__top-caption">
                                        <div class="product__top-text">Ноутбуки</div>
                                    </div>
                                    <div class="product__img">
                                        <picture>
                                            <source data-srcset="img/product/2.webp" type="image/webp"/>
                                            <source data-srcset="img/product/2.png" type="image/png"/><img class="lazy" data-src="img/product/2.png" alt=""/>
                                        </picture>
                                    </div>
                                </div>
                                <div class="product__info">
                                    <div class="product__subtitle">Ваге молодец</div>
                                    <div class="product__info-columns">
                                        <div class="product__info-column">
                                            <div class="product__name">Ноутбуки</div><a class="product__link" href=""><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-title">Описание</div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Оперативная память</div>
                                                <div class="product__info-text">до 64 Гбайт</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Накопители</div>
                                                <div class="product__info-text">До двух накопителей 2,5” HDD/SSD SATA</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Процессор</div>
                                                <div class="product__info-text">Intel® Core™ 8 и 9 поколений</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Дисплей</div>
                                                <div class="product__info-text">23,8-дюймовый IPS FHD</div>
                                            </div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-description">Описание категории про ноутбуки. А ваге молодец</div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__made">Разработано в России</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product swiper-slide">
                                <div class="product__top">
                                    <div class="product__top-caption">
                                        <div class="product__top-text">Моно</div>
                                    </div>
                                    <div class="product__img">
                                        <picture>
                                            <source data-srcset="img/product/1.webp" type="image/webp"/>
                                            <source data-srcset="img/product/1.png" type="image/png"/><img class="lazy" data-src="img/product/1.png" alt=""/>
                                        </picture>
                                    </div>
                                </div>
                                <div class="product__info">
                                    <div class="product__subtitle">Высокая производительность в эргономичном исполнении</div>
                                    <div class="product__info-columns">
                                        <div class="product__info-column">
                                            <div class="product__name">Моноблоки</div><a class="product__link" href=""><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-title">Описание</div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Оперативная память</div>
                                                <div class="product__info-text">до 64 Гбайт</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Накопители</div>
                                                <div class="product__info-text">До двух накопителей 2,5” HDD/SSD SATA</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Процессор</div>
                                                <div class="product__info-text">Intel® Core™ 8 и 9 поколений</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Дисплей</div>
                                                <div class="product__info-text">23,8-дюймовый IPS FHD</div>
                                            </div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-description">Идеальное решение для создания автоматизированного рабочего места</div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__made">Разработано в России</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product swiper-slide">
                                <div class="product__top">
                                    <div class="product__top-caption">
                                        <div class="product__top-text">Ноутбуки</div>
                                    </div>
                                    <div class="product__img">
                                        <picture>
                                            <source data-srcset="img/product/2.webp" type="image/webp"/>
                                            <source data-srcset="img/product/2.png" type="image/png"/><img class="lazy" data-src="img/product/2.png" alt=""/>
                                        </picture>
                                    </div>
                                </div>
                                <div class="product__info">
                                    <div class="product__subtitle">Ваге молодец</div>
                                    <div class="product__info-columns">
                                        <div class="product__info-column">
                                            <div class="product__name">Ноутбуки</div><a class="product__link" href=""><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-title">Описание</div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Оперативная память</div>
                                                <div class="product__info-text">до 64 Гбайт</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Накопители</div>
                                                <div class="product__info-text">До двух накопителей 2,5” HDD/SSD SATA</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Процессор</div>
                                                <div class="product__info-text">Intel® Core™ 8 и 9 поколений</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Дисплей</div>
                                                <div class="product__info-text">23,8-дюймовый IPS FHD</div>
                                            </div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-description">Описание категории про ноутбуки. А ваге молодец</div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__made">Разработано в России</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products__slider__mobile" data-category="cpu"></div>
                    <div class="products__slider swiper-container" data-category="cpu">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-wrapper">
                            <div class="product swiper-slide">
                                <div class="product__top">
                                    <div class="product__top-caption">
                                        <div class="product__top-text">Моно</div>
                                    </div>
                                    <div class="product__img">
                                        <picture>
                                            <source data-srcset="img/product/1.webp" type="image/webp"/>
                                            <source data-srcset="img/product/1.png" type="image/png"/><img class="lazy" data-src="img/product/1.png" alt=""/>
                                        </picture>
                                    </div>
                                </div>
                                <div class="product__info">
                                    <div class="product__subtitle">Высокая производительность в эргономичном исполнении</div>
                                    <div class="product__info-columns">
                                        <div class="product__info-column">
                                            <div class="product__name">Моноблоки</div><a class="product__link" href=""><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-title">Описание</div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Оперативная память</div>
                                                <div class="product__info-text">до 64 Гбайт</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Накопители</div>
                                                <div class="product__info-text">До двух накопителей 2,5” HDD/SSD SATA</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Процессор</div>
                                                <div class="product__info-text">Intel® Core™ 8 и 9 поколений</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Дисплей</div>
                                                <div class="product__info-text">23,8-дюймовый IPS FHD</div>
                                            </div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-description">Идеальное решение для создания автоматизированного рабочего места</div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__made">Разработано в России</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product swiper-slide">
                                <div class="product__top">
                                    <div class="product__top-caption">
                                        <div class="product__top-text">Ноутбуки</div>
                                    </div>
                                    <div class="product__img">
                                        <picture>
                                            <source data-srcset="img/product/2.webp" type="image/webp"/>
                                            <source data-srcset="img/product/2.png" type="image/png"/><img class="lazy" data-src="img/product/2.png" alt=""/>
                                        </picture>
                                    </div>
                                </div>
                                <div class="product__info">
                                    <div class="product__subtitle">Ваге молодец</div>
                                    <div class="product__info-columns">
                                        <div class="product__info-column">
                                            <div class="product__name">Ноутбуки</div><a class="product__link" href=""><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-title">Описание</div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Оперативная память</div>
                                                <div class="product__info-text">до 64 Гбайт</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Накопители</div>
                                                <div class="product__info-text">До двух накопителей 2,5” HDD/SSD SATA</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Процессор</div>
                                                <div class="product__info-text">Intel® Core™ 8 и 9 поколений</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Дисплей</div>
                                                <div class="product__info-text">23,8-дюймовый IPS FHD</div>
                                            </div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-description">Описание категории про ноутбуки. А ваге молодец</div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__made">Разработано в России</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product swiper-slide">
                                <div class="product__top">
                                    <div class="product__top-caption">
                                        <div class="product__top-text">Моно</div>
                                    </div>
                                    <div class="product__img">
                                        <picture>
                                            <source data-srcset="img/product/1.webp" type="image/webp"/>
                                            <source data-srcset="img/product/1.png" type="image/png"/><img class="lazy" data-src="img/product/1.png" alt=""/>
                                        </picture>
                                    </div>
                                </div>
                                <div class="product__info">
                                    <div class="product__subtitle">Высокая производительность в эргономичном исполнении</div>
                                    <div class="product__info-columns">
                                        <div class="product__info-column">
                                            <div class="product__name">Моноблоки</div><a class="product__link" href=""><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-title">Описание</div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Оперативная память</div>
                                                <div class="product__info-text">до 64 Гбайт</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Накопители</div>
                                                <div class="product__info-text">До двух накопителей 2,5” HDD/SSD SATA</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Процессор</div>
                                                <div class="product__info-text">Intel® Core™ 8 и 9 поколений</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Дисплей</div>
                                                <div class="product__info-text">23,8-дюймовый IPS FHD</div>
                                            </div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-description">Идеальное решение для создания автоматизированного рабочего места</div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__made">Разработано в России</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product swiper-slide">
                                <div class="product__top">
                                    <div class="product__top-caption">
                                        <div class="product__top-text">Ноутбуки</div>
                                    </div>
                                    <div class="product__img">
                                        <picture>
                                            <source data-srcset="img/product/2.webp" type="image/webp"/>
                                            <source data-srcset="img/product/2.png" type="image/png"/><img class="lazy" data-src="img/product/2.png" alt=""/>
                                        </picture>
                                    </div>
                                </div>
                                <div class="product__info">
                                    <div class="product__subtitle">Ваге молодец</div>
                                    <div class="product__info-columns">
                                        <div class="product__info-column">
                                            <div class="product__name">Ноутбуки</div><a class="product__link" href=""><img class="lazy" data-src="img/svg/arrow-half.svg" alt=""></a>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-title">Описание</div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Оперативная память</div>
                                                <div class="product__info-text">до 64 Гбайт</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Накопители</div>
                                                <div class="product__info-text">До двух накопителей 2,5” HDD/SSD SATA</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Процессор</div>
                                                <div class="product__info-text">Intel® Core™ 8 и 9 поколений</div>
                                            </div>
                                            <div class="product__info-item">
                                                <div class="product__info-caption">Дисплей</div>
                                                <div class="product__info-text">23,8-дюймовый IPS FHD</div>
                                            </div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__info-description">Описание категории про ноутбуки. А ваге молодец</div>
                                        </div>
                                        <div class="product__info-column">
                                            <div class="product__made">Разработано в России</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products__categories">
            <div class="l-default">
                <div class="products__categories-wrapper">
                    <div class="products__category" data-category="client">Клиентские решения</div>
                    <div class="products__category" data-category="cpu">Системы на Российских ЦПУ</div>
                    <div class="products__category" data-category="">Гиперконвергентные решения</div>
                    <div class="products__category" data-category="">Материнские платы</div>
                    <div class="products__category" data-category="">Серверные решения</div>
                    <div class="products__category" data-category="">Программное обеспечение</div>
                    <div class="products__category" data-category="">Новинки</div>
                    <div class="products__category" data-category="">Сетевые технологии</div>
                </div>
            </div>
        </div>
    </section>
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
                        <div class="calendar-events__column"><a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">22 </div>
                                        <div class="calendar-events__date-month">Августа</div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country">РИФ Кавказ</div>
                                        <div class="calendar-events__place-city">г. Махачкала</div>
                                    </div>
                                </div></a><a class="calendar-events__item" href="">
                                <div class="calendar-events__photo">
                                    <picture>
                                        <source data-srcset="img/events/1.webp" type="image/webp"/>
                                        <source data-srcset="img/events/1.jpg" type="image/jpg"/><img class="lazy" data-src="img/events/1.jpg" alt=""/>
                                    </picture>
                                </div>
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">22 </div>
                                        <div class="calendar-events__date-month">Августа</div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country">РИФ Кавказ</div>
                                        <div class="calendar-events__place-city">г. Махачкала</div>
                                    </div>
                                </div></a></div>
                        <div class="calendar-events__column"><a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">22 </div>
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
                                </div></a></div>
                        <div class="calendar-events__column"><a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">22 </div>
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
                                </div></a><a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">22 </div>
                                        <div class="calendar-events__date-month">Августа</div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country">РИФ Кавказ</div>
                                        <div class="calendar-events__place-city">г. Махачкала</div>
                                    </div>
                                </div></a></div>
                        <div class="calendar-events__column">
                            <div class="calendar-events__col"><a class="calendar-events__item" href="">
                                    <div class="calendar-events__info">
                                        <div class="calendar-events__date">
                                            <div class="calendar-events__date-number">22 </div>
                                            <div class="calendar-events__date-month">Августа</div>
                                        </div>
                                        <div class="calendar-events__place">
                                            <div class="calendar-events__place-country">РИФ Кавказ</div>
                                            <div class="calendar-events__place-city">г. Махачкала</div>
                                        </div>
                                    </div></a><a class="calendar-events__item" href="">
                                    <div class="calendar-events__info">
                                        <div class="calendar-events__date">
                                            <div class="calendar-events__date-number">22 </div>
                                            <div class="calendar-events__date-month">Августа</div>
                                        </div>
                                        <div class="calendar-events__place">
                                            <div class="calendar-events__place-country">РИФ Кавказ</div>
                                            <div class="calendar-events__place-city">г. Махачкала</div>
                                        </div>
                                    </div></a></div>
                            <div class="calendar-events__col"><a class="calendar-events__item" href="">
                                    <div class="calendar-events__info">
                                        <div class="calendar-events__date">
                                            <div class="calendar-events__date-number">22 </div>
                                            <div class="calendar-events__date-month">Августа</div>
                                        </div>
                                        <div class="calendar-events__place">
                                            <div class="calendar-events__place-country">РИФ Кавказ</div>
                                            <div class="calendar-events__place-city">г. Махачкала</div>
                                        </div>
                                    </div></a><a class="calendar-events__item" href="">
                                    <div class="calendar-events__info">
                                        <div class="calendar-events__date">
                                            <div class="calendar-events__date-number">22 </div>
                                            <div class="calendar-events__date-month">Августа</div>
                                        </div>
                                        <div class="calendar-events__place">
                                            <div class="calendar-events__place-country">РИФ Кавказ</div>
                                            <div class="calendar-events__place-city">г. Махачкала</div>
                                        </div>
                                    </div></a></div><a class="calendar-events__item" href="">
                                <div class="calendar-events__info">
                                    <div class="calendar-events__date">
                                        <div class="calendar-events__date-number">22 </div>
                                        <div class="calendar-events__date-month">Августа</div>
                                    </div>
                                    <div class="calendar-events__place">
                                        <div class="calendar-events__place-country">РИФ Кавказ</div>
                                        <div class="calendar-events__place-city">г. Махачкала</div>
                                    </div>
                                </div></a>
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
    <section class="posts">
        <div class="l-default">
            <div class="posts__items">
                <div class="posts__item">
                    <div class="posts__item-img">
                        <picture>
                            <source data-srcset="img/posts/1.webp" type="image/webp"/>
                            <source data-srcset="img/posts/1.jpg" type="image/jpg"/><img class="lazy" data-src="img/posts/1.jpg" alt=""/>
                        </picture>
                    </div>
                    <div class="posts__item-title">Для образования</div>
                    <div class="posts__item-subtitle">В образовательные учреждения было поставлено более 15 000 ноутбуков «Гравитон Н15И-К2»</div>
                    <div class="posts__item-text">
                        <p>«Гравитон Н15И-К2» обладает оптимальными габаритами и высокой производительностью.</p>
                        <p>Устойчивая к случайному пролитию жидкостей клавиатура, многообразие интерфейсов подключения внешних устройств, возможность длительной работы от аккумулятора – всё это позволяет использовать ноутбук учащимися любых возрастных групп.</p>
                        <p>Мы осуществили</p>
                    </div>
                    <ul class="posts__item-list">
                        <li>Поставку товара в короткие сроки</li>
                        <li>Сборку по индивидуальному заказу</li>
                        <li>Установку индивидуального ПО</li>
                    </ul>
                    <div class="posts__item-bottom"><a class="posts__link" href="">
                            <div class="posts__link-text">Посмотреть кейс</div>
                            <div class="posts__link-icon">
                                <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div></a></div>
                </div>
                <div class="posts__item">
                    <div class="posts__item-img">
                        <picture>
                            <source data-srcset="img/posts/1.webp" type="image/webp"/>
                            <source data-srcset="img/posts/1.jpg" type="image/jpg"/><img class="lazy" data-src="img/posts/1.jpg" alt=""/>
                        </picture>
                    </div>
                    <div class="posts__item-title">Для правоохранительных органов</div>
                    <div class="posts__item-subtitle">Поставки для главных управлений в 40 регионах</div>
                    <div class="posts__item-text">
                        <p>Сервера “Гравитон” поставлены и используются в одной из крупнейших ИТ-систем на территории Российской Федерации. Данная ИТ-система успешна позволяет отслеживать угнанные и покинувшие место ДТП автомобили.</p>
                        <p>Мы поставили и развернули сервера в кратчайшие сроки. </p>
                        <p>Мы осуществили</p>
                    </div>
                    <ul class="posts__item-list">
                        <li>Поставку товара в короткие сроки</li>
                        <li>Сборку по индивидуальному заказу</li>
                        <li>Установку индивидуального ПО</li>
                    </ul>
                    <div class="posts__item-bottom"><a class="posts__link" href="">
                            <div class="posts__link-text">Посмотреть кейс</div>
                            <div class="posts__link-icon">
                                <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="l-default">
            <h2 class="title title--h2">Наши партнеры</h2>
            <div class="partners__items">
                <div class="partners__item"><img class="lazy" data-src="img/svg/logos/3logic.svg" alt=""></div>
                <div class="partners__item"><img class="lazy" data-src="img/svg/logos/elbrus.svg" alt=""></div>
                <div class="partners__item"><img class="lazy" data-src="img/svg/logos/basealt.svg" alt=""></div>
                <div class="partners__item"><img class="lazy" data-src="img/svg/logos/astralinux.svg" alt=""></div>
                <div class="partners__item"><img class="lazy" data-src="img/svg/logos/code.svg" alt=""></div>
            </div>
        </div>
    </section>
    <section class="bottom">
        <div class="l-default">
            <h3 class="title title--h3">Гравитон</h3>
            <div class="bottom__text">
                <p>Компания Гравитон - российский разработчик и производитель вычислительной техники, один из лидеров в области импортозамещения</p>
                <p>Продукция разрабатывается и производится на территории РФ, внесена в Единый реестр российской радиоэлектронной продукции Минпромторга РФ, так же ведутся разработки программно-аппаратных комплексов на базе ПО из реестра Минцифры РФ.</p>
            </div>
            <div class="bottom__items">
                <div class="bottom__item">Продукция соответствует ФЗ-44 и ФЗ-223, сертифицирована ТР ТС, МПТ, РЭП, Минкомсвязи, ФСТЭК, МО и ФСБ. </div>
                <div class="bottom__item">Сервисное обслуживание продукции осуществляется на всей территории России как в специализированных центрах, так и на метах эксплуатации.</div>
            </div><div class="animation-wrapper">
                <div class="sphere-animation">
                    <svg class="sphere" viewBox="0 0 440 440" stroke="rgba(80,80,80,.35)">
                        <defs>
                            <linearGradient id="sphereGradient" x1="5%" x2="5%" y1="0%" y2="15%">
                                <stop stop-color="#373734" offset="0%"/>
                                <stop stop-color="#242423" offset="50%"/>
                                <stop stop-color="#0D0D0C" offset="100%"/>
                            </linearGradient>
                        </defs>
                        <path d="M361.604 361.238c-24.407 24.408-51.119 37.27-59.662 28.727-8.542-8.543 4.319-35.255 28.726-59.663 24.408-24.407 51.12-37.269 59.663-28.726 8.542 8.543-4.319 35.255-28.727 59.662z"/>
                        <path d="M360.72 360.354c-35.879 35.88-75.254 54.677-87.946 41.985-12.692-12.692 6.105-52.067 41.985-87.947 35.879-35.879 75.254-54.676 87.946-41.984 12.692 12.692-6.105 52.067-41.984 87.946z"/>
                        <path d="M357.185 356.819c-44.91 44.91-94.376 68.258-110.485 52.149-16.11-16.11 7.238-65.575 52.149-110.485 44.91-44.91 94.376-68.259 110.485-52.15 16.11 16.11-7.239 65.576-52.149 110.486z"/>
                        <path d="M350.998 350.632c-53.21 53.209-111.579 81.107-130.373 62.313-18.794-18.793 9.105-77.163 62.314-130.372 53.209-53.21 111.579-81.108 130.373-62.314 18.794 18.794-9.105 77.164-62.314 130.373z"/>
                        <path d="M343.043 342.677c-59.8 59.799-125.292 91.26-146.283 70.268-20.99-20.99 10.47-86.483 70.269-146.282 59.799-59.8 125.292-91.26 146.283-70.269 20.99 20.99-10.47 86.484-70.27 146.283z"/>
                        <path d="M334.646 334.28c-65.169 65.169-136.697 99.3-159.762 76.235-23.065-23.066 11.066-94.593 76.235-159.762s136.697-99.3 159.762-76.235c23.065 23.065-11.066 94.593-76.235 159.762z"/>
                        <path d="M324.923 324.557c-69.806 69.806-146.38 106.411-171.031 81.76-24.652-24.652 11.953-101.226 81.759-171.032 69.806-69.806 146.38-106.411 171.031-81.76 24.652 24.653-11.953 101.226-81.759 171.032z"/>
                        <path d="M312.99 312.625c-73.222 73.223-153.555 111.609-179.428 85.736-25.872-25.872 12.514-106.205 85.737-179.428s153.556-111.609 179.429-85.737c25.872 25.873-12.514 106.205-85.737 179.429z"/>
                        <path d="M300.175 299.808c-75.909 75.909-159.11 115.778-185.837 89.052-26.726-26.727 13.143-109.929 89.051-185.837 75.908-75.908 159.11-115.778 185.837-89.051 26.726 26.726-13.143 109.928-89.051 185.836z"/>
                        <path d="M284.707 284.34c-77.617 77.617-162.303 118.773-189.152 91.924-26.848-26.848 14.308-111.534 91.924-189.15C265.096 109.496 349.782 68.34 376.63 95.188c26.849 26.849-14.307 111.535-91.923 189.151z"/>
                        <path d="M269.239 267.989c-78.105 78.104-163.187 119.656-190.035 92.807-26.849-26.848 14.703-111.93 92.807-190.035 78.105-78.104 163.187-119.656 190.035-92.807 26.849 26.848-14.703 111.93-92.807 190.035z"/>
                        <path d="M252.887 252.52C175.27 330.138 90.584 371.294 63.736 344.446 36.887 317.596 78.043 232.91 155.66 155.293 233.276 77.677 317.962 36.521 344.81 63.37c26.85 26.848-14.307 111.534-91.923 189.15z"/>
                        <path d="M236.977 236.61C161.069 312.52 77.867 352.389 51.14 325.663c-26.726-26.727 13.143-109.928 89.052-185.837 75.908-75.908 159.11-115.777 185.836-89.05 26.727 26.726-13.143 109.928-89.051 185.836z"/>
                        <path d="M221.067 220.7C147.844 293.925 67.51 332.31 41.639 306.439c-25.873-25.873 12.513-106.206 85.736-179.429C200.6 53.786 280.931 15.4 306.804 41.272c25.872 25.873-12.514 106.206-85.737 179.429z"/>
                        <path d="M205.157 204.79c-69.806 69.807-146.38 106.412-171.031 81.76-24.652-24.652 11.953-101.225 81.759-171.031 69.806-69.807 146.38-106.411 171.031-81.76 24.652 24.652-11.953 101.226-81.759 171.032z"/>
                        <path d="M189.247 188.881c-65.169 65.169-136.696 99.3-159.762 76.235-23.065-23.065 11.066-94.593 76.235-159.762s136.697-99.3 159.762-76.235c23.065 23.065-11.066 94.593-76.235 159.762z"/>
                        <path d="M173.337 172.971c-59.799 59.8-125.292 91.26-146.282 70.269-20.991-20.99 10.47-86.484 70.268-146.283 59.8-59.799 125.292-91.26 146.283-70.269 20.99 20.991-10.47 86.484-70.269 146.283z"/>
                        <path d="M157.427 157.061c-53.209 53.21-111.578 81.108-130.372 62.314-18.794-18.794 9.104-77.164 62.313-130.373 53.21-53.209 111.58-81.108 130.373-62.314 18.794 18.794-9.105 77.164-62.314 130.373z"/>
                        <path d="M141.517 141.151c-44.91 44.91-94.376 68.259-110.485 52.15-16.11-16.11 7.239-65.576 52.15-110.486 44.91-44.91 94.375-68.258 110.485-52.15 16.109 16.11-7.24 65.576-52.15 110.486z"/>
                        <path d="M125.608 125.241c-35.88 35.88-75.255 54.677-87.947 41.985-12.692-12.692 6.105-52.067 41.985-87.947C115.525 43.4 154.9 24.603 167.592 37.295c12.692 12.692-6.105 52.067-41.984 87.946z"/>
                        <path d="M109.698 109.332c-24.408 24.407-51.12 37.268-59.663 28.726-8.542-8.543 4.319-35.255 28.727-59.662 24.407-24.408 51.12-37.27 59.662-28.727 8.543 8.543-4.319 35.255-28.726 59.663z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
</main>
