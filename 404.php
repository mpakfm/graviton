<?php
/** @var CMain $APPLICATION */
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена | 404 Not Found");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/error_page.css">', true);

?>
<main class="main">
    <section class="s-error" style="background-image: url(img/bg/404.png);">
        <div class="l-default">
            <div class="s-error__wrap">
                <div class="s-error_content">
                    <div class="s-error__note">
                        99,5% всех посетителей никогда не&nbsp;видят эту страницу<br />
                        <span>0,5%</span> посетителей обнаруживают её&nbsp;<span>случайно</span>
                    </div>
                    <div class="s-error__title">404</div>
                    <div class="s-error__subtitle">Поздравляем!</div>
                    <div class="s-error__text">
                        Вы&nbsp;один из&nbsp;немногих счастливчиков, кому удалось найти нашу страницу.<br />
                        Не&nbsp;волнуйтесь&nbsp;&mdash; это не&nbsp;тупик!
                    </div>
                </div>
                <div class="s-error__buttons">
                    <div class="s-error__item">
                        <div class="s-error__item-text">
                            Посмотрите видео<br />
                            о компании Гравитон
                        </div>
                        <a class="s-error__item-button btn btn--bordered" href="">Смотреть</a>
                    </div>
                    <div class="s-error__item">
                        <div class="s-error__item-text">
                            Выйти на связь с<br />
                            командой Гравитон
                        </div>
                        <a class="s-error__item-button btn btn--bordered" href="">Связаться с нами</a>
                    </div>
                    <div class="s-error__item">
                        <div class="s-error__item-text">
                            Скачать каталог<br />
                            продукции Гравитон
                        </div>
                        <a class="s-error__item-button btn btn--bordered" download href="">Скачать</a>
                    </div>
                    <div class="s-error__item">
                        <div class="s-error__item-text">
                            Новости из<br />
                            жизни компании
                        </div>
                        <a class="s-error__item-button btn btn--bordered" href="">Перейти</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
