<?php

namespace Library\Tools;

use Library\Exception\Tools\CookieSecretException;

class CookieSecret
{
    static public $secret = 'hQ50dj5dcj7$3swOlvmnbuyrjFghjkhjk5h39f$dkjtt^dlbmdf1bld0v';

    public static function setCookieValue(): void
    {
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
