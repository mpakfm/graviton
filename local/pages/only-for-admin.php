<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 08.07.2022
 * Time: 01:03
 *
 * @var CUser $USER
 */

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

if (!$USER->IsAdmin()) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/403.php";
    die();
}
?>
    <div class="content">
        <h1>Only for admin</h1>
    </div>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
