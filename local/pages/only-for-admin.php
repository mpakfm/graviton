<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 08.07.2022
 * Time: 01:03
 *
 * @var CUser $USER
 */
/** @var CMain $APPLICATION */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Graviton - Only for admin");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

if (!$USER->IsAdmin()) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/403.php";
    die();
}
?>
    <main class="main">
        <section class="news-detail">
            <div class="l-default">
                <h1>Only for admin</h1>
            </div>
        </section>
    </main>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
