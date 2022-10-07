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
    <section class="s-error-content">
        <div class="l-default">
            <div class="s-error-content__wrap">
                <h1 class="s-error-content__title title title--h2">Cтраница не найдена</h1>
                <div class="s-error-content__image"><img src="img/global/404.jpeg" alt=""></div>
                <div class="s-error-content__text">
                    <p>Неправильно набран адрес, или такой страницы на сайте больше не существует.</p>
                    <p>Вернитесь на <a href="/">главную страницу</a></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
