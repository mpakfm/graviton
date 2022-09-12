<?php

CHTTP::SetStatus("500 Internal Server Error");
@define("ERROR_500", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

?>
<div class="content">
    <h1 class="error__title">Ошибка сервера</h1>
    <div class="bx-404-container">
        <div class="bx-404-block"><img src="<?=SITE_DIR?>images/404.png" alt=""></div>
        <div class="bx-404-text-block">Что-то сломалось, попробуйте позднее.</div>
        <div class="">Вернитесь на <a href="<?=SITE_DIR?>">главную</a></div>
    </div>
</div><!-- inner -->
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>
