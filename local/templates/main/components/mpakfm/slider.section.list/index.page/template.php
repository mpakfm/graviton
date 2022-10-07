<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    01.10.2022
 * Time:    2:11
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
