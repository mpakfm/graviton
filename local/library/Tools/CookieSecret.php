<?php

namespace Library\Tools;

use Library\Exception\Tools\CookieSecretException;
use Mpakfm\Printu;

class CookieSecret
{
    static public $secret = 'hQ50dj5dcj7$3swOlvmnbuyrjFghjkhjk5h39f$dkjtt^dlbmdf1bld0v';

    public static function setCookieValue(): void
    {
//        Printu::obj($_SERVER['PHP_SELF'])->title('[setCookieValue] PHP_SELF');
//        Printu::obj($_SERVER['REQUEST_URI'])->title('[setCookieValue] REQUEST_URI');
//        Printu::obj($_SERVER['REAL_FILE_PATH'])->title('[setCookieValue] REAL_FILE_PATH');
//        // Защитный механизм, что бы запись секретного ключа не
//        // срабатывала на всякие оишбочные файлы и подключения.
//        if (!$_SERVER['REAL_FILE_PATH'] && $_SERVER['PHP_SELF'] != $_SERVER['REQUEST_URI']) {
//            return;
//        }
        $rand               = rand(1, 10);
        $secretCode         = static::$secret . md5(time()) . $rand;
        $_SESSION['BX_IDX'] = $secretCode;
    }

    public static function checkString(): void
    {
        if (!isset($_REQUEST['cx'])) {
            return;
        }
        if (isset($_REQUEST['cx']) && (!isset($_SESSION['BX_IDX']) || $_REQUEST['cx'] == '')) {
            throw new CookieSecretException('Unknown client');
        }
        $strlen = strlen($_SESSION['BX_IDX']);
        $offset = $_SESSION['BX_IDX'][($strlen - 1)];
        $str    = substr($_SESSION['BX_IDX'], $offset);
        if ($str !== $_REQUEST['cx']) {
            throw new CookieSecretException('Wrong client');
        }
    }

    public static function getJsFunction(): string
    {
        $strlen     = strlen($_SESSION['BX_IDX']);
        $offset     = $_SESSION['BX_IDX'][($strlen - 1)];
        $str        = substr($_SESSION['BX_IDX'], $offset);

        $jsFunction = <<<JS
<script>
function getCx() {
    return '{$str}';
}
</script>
JS;
        return $jsFunction;
    }
}
