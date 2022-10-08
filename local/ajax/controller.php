<?php
/**
 * Created by PhpStorm
 * Project: itnmp
 * User:    mpak
 * Date:    19.07.2022
 * Time:    14:53
 * Description: Передавать запросы на url: /local/ajax/controller.php
 * Обязательные параметры:
 *      className: 'Admin/Events',  - имя класса в Controller для приёма запроса
 *      action: 'active',           - имя метода, но в классе будет activeAction
 */

define('NO_KEEP_STATISTIC', true);
define('NO_AGENT_CHECK', true);
define('PUBLIC_AJAX_MODE', true);

if (!array_key_exists('DOCUMENT_ROOT', $_SERVER)) {
    header("HTTP/1.1 404 Not Found");
    die;
}
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (!array_key_exists('className', $_REQUEST) || empty($_REQUEST['className'])) {
    header("HTTP/1.1 404 Not Found");
    die;
}

$qualifiedClassName = $className = $_REQUEST['className'];
if (strpos($className, '/') !== false) {
    $qualifiedClassName = str_replace('/', "\\", $className);
}
$path      = $_SERVER['DOCUMENT_ROOT'] . "/local/library/Controller/{$className}.php";

if (!file_exists($path)) {
    header("HTTP/1.1 404 Not Found");
    die;
}

include_once $path;

$fullQualifiedName = "\\Library\\Controller\\{$qualifiedClassName}";
$controller        = new $fullQualifiedName();
