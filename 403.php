<?php
/** @var $APPLICATION */

include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("403 Forbidden");
@define("ERROR_403", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("403 Forbidden");
?>
<div class="content">
    <h1>Доступ запрещен</h1>
    <div class="bx-404-container">
        <div class="bx-404-text-block">Доступ запрещен. Ошибка 403.</div>
        <div class="">Вернитесь на <a href="<?=SITE_DIR?>">главную</a></div>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>
