<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 11.09.2022
 * Time: 19:53
 */

use Bitrix\Main\EventManager;
use Library\Tools\AutoLoader;
use Library\Tools\LogWriter;

require_once($_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php');

if (
(defined('X_NO_INIT') && X_NO_INIT === true)
|| (isset($_REQUEST['X_NO_INIT']) && $_REQUEST['X_NO_INIT'] === 'Y')
) {
    return;
}

// Авто-Загрузчик библиотек проекта из папки /local/
spl_autoload_register(function ($class) {
    AutoLoader::load($class);
});

LogWriter::setPath(__DIR__ . '/../log');

EventManager::getInstance()->unRegisterEventHandler(
    "main",
    "OnAdminIBlockElementEdit",
    'seo',
    "\\Bitrix\\Seo\\AdvTabEngine",
    "eventHandler"
);

$breadcrumb = \Library\Tools\Breadcrumb::init();
if (strpos($_SERVER['REQUEST_URI'], '/catalog') === 0) {
    $breadcrumb->setIblock('product', 'catalog')->setChain(str_replace('/', '', 'catalog'));
} elseif (strpos($_SERVER['REQUEST_URI'], '/events') === 0) {
    $breadcrumb->setIblock('events', 'content')->setChain('events');
} elseif (strpos($_SERVER['REQUEST_URI'], '/news') === 0) {
    $breadcrumb->setIblock('news', 'content')->setChain('news');
} elseif (strpos($_SERVER['REQUEST_URI'], '/cases') === 0) {
    $breadcrumb->setIblock('cases', 'content')->setChain('cases');
} elseif (strpos($_SERVER['REQUEST_URI'], '/contacts') === 0) {
    \Library\Tools\Breadcrumb::$chain[] = [
        'type' => 'section',
        'link' => '/contacts',
        'name' => "Контакты",
    ];
} elseif (strpos($_SERVER['REQUEST_URI'], '/page/') === 0) {
    $breadcrumb->setIblock('pages', 'content')->setChain();
}
