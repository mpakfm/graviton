<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    06.11.2022
 * Time:    16:41
 */

/** @var CMain $APPLICATION */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;

define("BODY_CLASS", "PAGE");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/about_page.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/legal_support_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

$iblock   = CacheSelector::getIblockId('pages', 'content');
$pageItem = CacheSelector::getIblockElement($iblock, 'about');

?>

    <main class="main">
        <div class="back-img"><img src="img/back/contacts.png"></div>
        <section class="s_banner">
            <div class="l-default">
                <div class="s-banner__title">
                    <h1 class="title title--h1-banner s-banner__title title--medium"><?=$pageItem['NAME'];?></h1>
                </div>
            </div>
        </section>

        <section class="s-support-contact s-support-contact-legal">
            <div class="l-default">
                <div class="s-support-contact__top">
                    <div class="s-support-contact__caption"><?=$pageItem['NAME'];?></div>
                </div>
                <div class="s-support-contact__descriptions">
                    <div class="s-support-contact__description">
                        <?=$pageItem['DETAIL_TEXT'];?>
                    </div>
                </div>
                <div class="s-support-contact__content">

                </div>
            </div>
        </section>
    </main>

<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
