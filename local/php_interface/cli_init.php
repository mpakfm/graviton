<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 11.09.2022
 * Time: 19:53
 */

set_time_limit(0);

ini_set('mbstring.func_overload', '2');
ini_set('memory_limit', '1024M');

define('LANG', 's1');
define('BX_UTF', true);
define('NO_KEEP_STATISTIC', true);
define('BX_BUFFER_USED', true);

require_once __DIR__ . '/root.php';

$_SERVER['DOCUMENT_ROOT'] = ROOT_SERVER_PATH . DIRECTORY_SEPARATOR . ROOT_SERVER_SITE;

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
