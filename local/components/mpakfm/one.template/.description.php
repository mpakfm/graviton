<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 13.08.19
 * Time: 11:34
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}

use Bitrix\Main\Localization\Loc;


$arComponentDescription = [
    "NAME"        => Loc::getMessage("COMP_ONETPL_TITLE"),
    "DESCRIPTION" => GetMessage("COMP_ONETPL_DESCR"),
    "ICON"        => "/images/payment.gif",
    "PATH"        => [
        "ID"    => "utility",
        "CHILD" => [
            "ID"   => "user",
            "NAME" => GetMessage("MAIN_USER_GROUP_NAME")
        ],
    ],
];
