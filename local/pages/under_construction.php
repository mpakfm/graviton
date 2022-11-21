<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    13.11.2022
 * Time:    18:35
 */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\Breadcrumb;

$breadcrumb = Breadcrumb::init();
$breadcrumb->bodyStr = 'class="develop" data-scroll-container';

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/develop_page.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/develop_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

?>

<main class="main">
    <section class="s-develop">
        <div class="l-default">
            <div class="s-develop__top">
                <div class="s-develop__title">Страница</div>
                <div class="s-develop__subtitle">находится  <span>в  разработке</span></div>
            </div>
            <div class="s-develop__docs">
                <a class="s-develop__doc" href="https://rutube.ru/video/839827f470bbe55fd9f5efda45342fce/">
                    <div class="s-develop__doc-text">Посмотрите видео о компании Гравитон</div>
                    <div class="s-develop__doc-btn btn btn--bordered">Смотреть</div></a>
                <a class="s-develop__doc" href="/page/about/1616" download>
                    <div class="s-develop__doc-text">Скачать катлог продукции Гравитон</div>
                    <div class="s-develop__doc-btn btn btn--bordered">Скачать</div></a>
                <a class="s-develop__doc" href="mailto:sale@graviton.ru">
                    <div class="s-develop__doc-text">Выйти на связь с командой Гравитон</div>
                    <div class="s-develop__doc-btn btn btn--bordered">Связаться с нами</div></a>
                <a class="s-develop__doc" href="/news">
                    <div class="s-develop__doc-text">Новости из жизни копании</div>
                    <div class="s-develop__doc-btn btn btn--bordered">Перейти</div></a>
            </div>
        </div>
    </section>
</main>
