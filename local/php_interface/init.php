<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 11.09.2022
 * Time: 19:53
 */

use Bitrix\Main\EventManager;
use Library\Tools\AutoLoader;
use Library\Tools\Breadcrumb;
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
AddEventHandler('form', 'onAfterResultAdd', ["\\Library\\Tools\\B24Sender", "onAfterResultAdd"]);

$breadcrumb = Breadcrumb::init();
