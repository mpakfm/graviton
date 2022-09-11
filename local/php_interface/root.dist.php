<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 11.09.2022
 * Time: 19:53
 * Конфигурация путей для разных серверов и настроек отличающихся дл разных проектов.
 * Цель создания - отказ от использования в коде жестко прописанных путей вроде '/home/bitrix/www/'
 * Этот файл является образцом и находится в гит.
 * Исполняется файл local/php_interface/root.php который необходимо копировать с этого файла подставляя свои значения.
 */

if (isset($_SERVER['ROOT_SERVER'])) {
    define('ROOT_SERVER', $_SERVER['ROOT_SERVER']);
}

if (!defined('ROOT_SERVER')) {
    define('ROOT_SERVER', 'PRODUCTION');
}

$serverInterfaces = [
    'PRODUCTION' => [
        'root'   => '/var/www',     // путь от корня до родительской папки
        'bitrix' => 'www',          // папка проекта в которой лежит bitrix
        'site'   => 'www',          // папка проекта
        //'url'  => '',             // урл проекта. Используется в юнит-тестах.
    ],
    'SFOMIN' => [
        'root'   => '/var/www/extrabitrix',     // путь от корня до родительской папки
        'bitrix' => 'graviton',                 // папка проекта в которой лежит bitrix
        'site'   => 'graviton',                 // папка проекта
        'url'    => 'http://graviton.site',     // урл проекта. Используется в юнит-тестах.
    ],
];

$serverRootPath = $serverInterfaces[ROOT_SERVER];

// Путь до корня и папки проектов
define('ROOT_SERVER_PATH', $serverRootPath['root']);
define('ROOT_SERVER_BITRIX', $serverRootPath['bitrix']);
define('ROOT_SERVER_SITE', $serverRootPath['site']);

if (isset($serverRootPath['url'])) {
    define('ROOT_SERVER_URL', $serverRootPath['url']);
    if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) {
        define('ROOT_SERVER_PROTOCOL', 'https://');
    } else {
        define('ROOT_SERVER_PROTOCOL', 'http://');
    }
} elseif (php_sapi_name() != 'cli') {
    if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) {
        define('ROOT_SERVER_URL', 'https://' . $_SERVER['SERVER_NAME']);
        define('ROOT_SERVER_PROTOCOL', 'https://');
    } else {
        define('ROOT_SERVER_URL', 'http://' . $_SERVER['SERVER_NAME']);
        define('ROOT_SERVER_PROTOCOL', 'http://');
    }
}

// Настройки
define('CACHETIME_HOUR',  3600);
define('CACHETIME_DAY',   86400);
define('CACHETIME_MONTH', 2592000);
