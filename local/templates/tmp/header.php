<?php
/** @var CMain $APPLICATION */
/** @var CUser $USER */

\Mpakfm\Printu::obj(SITE_TEMPLATE_PATH)->title('SITE_TEMPLATE_PATH');

?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<!-- TEMPLATE TEMPORARY -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <base href="<?=SITE_TEMPLATE_PATH;?>/">
    <style>

    </style>
    <?$APPLICATION->ShowHead();?>
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <div class="wrapper">
        <div class="box">
            <h3>Навигация</h3>
            <ul>
                <li><a href="/">Главная</a></li>
                <?php if ($USER->IsAuthorized()): ?>
                    <li><a href="/bitrix">Панель</a></li>
                    <li><a href="/?logout=yes&sessid=<?=$_SESSION['fixed_session_id'];?>">Выход</a></li>
                <?php else: ?>
                    <li><a href="/bitrix">Вход</a></li>
                <?php endif; ?>
            </ul>
        </div>
