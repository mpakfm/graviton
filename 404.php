<?php
/** @var CMain $APPLICATION */
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>
<main class="main">
    <div class="l-content">
        <h1>Cтраница не найдена</h1>
        <div class="news__container">
            <div class="bx-404-block"><img src="<?=SITE_TEMPLATE_PATH?>/img/404.jpg" alt=""></div>
            <div class="bx-404-text-block">Неправильно набран адрес, <br>или такой страницы на сайте больше не существует.</div>
            <div class="bx-404-text-block">Вернитесь на <a href="/">главную</a></div>
        </div>
	</div>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
