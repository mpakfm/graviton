<?php

namespace Library\Tools;

/**
 * Class AutoLoader
 * Загружает локальные библиотеки проектов из их личных папок /local/
 * Именование классов/файлов: PSR-4
 */
class AutoLoader
{
    public static function load(string $className)
    {
        if (strpos($className, 'Library') === 0) {
            $className = str_replace('Library\\', '', $className);
            $fileName  = ROOT_SERVER_PATH . DIRECTORY_SEPARATOR . ROOT_SERVER_SITE . DIRECTORY_SEPARATOR . 'local/library/' . str_replace('\\', '/', $className) . '.php';
            if (file_exists($fileName)) {
                include $fileName;
            }
        }
    }

    public static function moduleClassLoader($module, $path, string $className)
    {
        $moduleNamespace = explode('.', $module);

        $str = [];
        foreach ($moduleNamespace as $item) {
            $str[] = ucfirst($item);
        }
        $namespace = implode("\\", $str);
        if (strpos($className, $namespace) !== false) {
            $className = str_replace('Modules\\' . $module . '\\', '', $className);
            $className = str_replace($namespace . '\\', '', $className);
            $fileName  = ROOT_SERVER_PATH . DIRECTORY_SEPARATOR . ROOT_SERVER_SITE . DIRECTORY_SEPARATOR . 'local/modules/' . $module . '/' . $path . str_replace('\\', '/', $className) . '.php';
            if (file_exists($fileName)) {
                include $fileName;
            }
        }
    }
}
