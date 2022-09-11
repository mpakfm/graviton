<?php
/** @var $APPLICATION */
/** @var CUser $USER */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$frame = $this->createFrame()->begin();
?>

<div class="content">
    <h1>Главная страница</h1>

    <div class="box">
        <h3>Для проверок</h3>
        <ul>
            <li><a href="/page/about">О компании</a></li>
            <li><a href="/unknown">Unknown page (тест ошибки 404)</a></li>
            <li><a href="/only-for-admin">Только для админов (тест ошибки 403)</a></li>
            <li><a href="/error">Ошибка (тест ошибки 500)</a></li>
        </ul>
    </div>
    <div class="box">
        <h3>Заготовки компонентов главной страницы</h3>

    </div>
</div>
<?php

$frame->end();

?>
