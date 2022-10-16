<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$arCloudParams = [
    "SEARCH"          => $arResult["REQUEST"]["~QUERY"],
    "TAGS"            => $arResult["REQUEST"]["~TAGS"],
    "CHECK_DATES"     => $arParams["CHECK_DATES"],
    "arrFILTER"       => $arParams["arrFILTER"],
    "SORT"            => $arParams["TAGS_SORT"],
    "PAGE_ELEMENTS"   => $arParams["TAGS_PAGE_ELEMENTS"],
    "PERIOD"          => $arParams["TAGS_PERIOD"],
    "URL_SEARCH"      => $arParams["TAGS_URL_SEARCH"],
    "TAGS_INHERIT"    => $arParams["TAGS_INHERIT"],
    "FONT_MAX"        => $arParams["FONT_MAX"],
    "FONT_MIN"        => $arParams["FONT_MIN"],
    "COLOR_NEW"       => $arParams["COLOR_NEW"],
    "COLOR_OLD"       => $arParams["COLOR_OLD"],
    "PERIOD_NEW_TAGS" => $arParams["PERIOD_NEW_TAGS"],
    "SHOW_CHAIN"      => $arParams["SHOW_CHAIN"],
    "COLOR_TYPE"      => $arParams["COLOR_TYPE"],
    "WIDTH"           => $arParams["WIDTH"],
    "CACHE_TIME"      => $arParams["CACHE_TIME"],
    "CACHE_TYPE"      => $arParams["CACHE_TYPE"],
    "RESTART"         => $arParams["RESTART"],
];

if (is_array($arCloudParams["arrFILTER"])) {
    foreach ($arCloudParams["arrFILTER"] as $strFILTER) {
        if ($strFILTER == "main") {
            $arCloudParams["arrFILTER_main"] = $arParams["arrFILTER_main"];
        } elseif ($strFILTER == "forum" && IsModuleInstalled("forum")) {
            $arCloudParams["arrFILTER_forum"] = $arParams["arrFILTER_forum"];
        } elseif (mb_strpos($strFILTER, "iblock_") === 0) {
            if (isset($arParams["arrFILTER_" . $strFILTER]) && is_array($arParams["arrFILTER_" . $strFILTER])) {
                foreach ($arParams["arrFILTER_" . $strFILTER] as $strIBlock) {
                    $arCloudParams["arrFILTER_" . $strFILTER] = $arParams["arrFILTER_" . $strFILTER];
                }
            }
        } elseif ($strFILTER == "blog") {
            $arCloudParams["arrFILTER_blog"] = $arParams["arrFILTER_blog"];
        } elseif ($strFILTER == "socialnetwork") {
            $arCloudParams["arrFILTER_socialnetwork"] = $arParams["arrFILTER_socialnetwork"];
        }
    }
}
?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        $('#js-search-input').val('<?=$arResult["REQUEST"]["QUERY"]?>');
    });
</script>
<section class="news" style="background-image: url('img/news/back.jpg');">
    <div class="l-content">
        <h2 class="search__title" style="margin-bottom: 40px;">
            <?php if (isset($_GET['q']) && $_GET['q']) { ?>
                <p>Результаты поиска по&nbsp;запросу «<?=$arResult["REQUEST"]["QUERY"]?>»</p>
                <?php if (array_key_exists('ORIGINAL_QUERY', $arResult["REQUEST"])) { ?>
                    <p style="font-size: 0.7em;">Искать по запросу <a href="/search?q=rkfdbfnehf&s=&spell=Y">«<?=$arResult["REQUEST"]["ORIGINAL_QUERY"]?>»</a></p>
                <?php } ?>
            <?php } else { ?>
                Поиск
            <?php } ?>
        </h2>
        <div class="news__container">
            <?php if ($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false) { ?>
            <?php } elseif ($arResult["ERROR_CODE"] != 0) { ?>
                <p><?=GetMessage("SEARCH_ERROR")?></p>
                <?ShowError($arResult["ERROR_TEXT"]);?>
                <p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
                <br /><br />
                <p><?=GetMessage("SEARCH_SINTAX")?><br /><b><?=GetMessage("SEARCH_LOGIC")?></b></p>
                <table border="0" cellpadding="5">
                    <tr>
                        <td align="center" valign="top"><?=GetMessage("SEARCH_OPERATOR")?></td><td valign="top"><?=GetMessage("SEARCH_SYNONIM")?></td>
                        <td><?=GetMessage("SEARCH_DESCRIPTION")?></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top"><?=GetMessage("SEARCH_AND")?></td><td valign="top">and, &amp;, +</td>
                        <td><?=GetMessage("SEARCH_AND_ALT")?></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top"><?=GetMessage("SEARCH_OR")?></td><td valign="top">or, |</td>
                        <td><?=GetMessage("SEARCH_OR_ALT")?></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top"><?=GetMessage("SEARCH_NOT")?></td><td valign="top">not, ~</td>
                        <td><?=GetMessage("SEARCH_NOT_ALT")?></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">( )</td>
                        <td valign="top">&nbsp;</td>
                        <td><?=GetMessage("SEARCH_BRACKETS_ALT")?></td>
                    </tr>
                </table>
            <?php } elseif (count($arResult["SEARCH"]) > 0) { ?>
                <?php if ($arParams["DISPLAY_TOP_PAGER"] != "N") { ?>
                    <?= $arResult["NAV_STRING"]; ?>
                <?php } ?>
                <div class="news-item">
                    <?php foreach ($arResult["SEARCH"] as $arItem) { ?>
                        <?php
                            $dt = date_create_from_format('d.m.Y', $arItem['DATE_CHANGE']);
                        ?>
                    <div class="news-item__content">
                        <div class="news-item__content--preview">
                            <div class="preview__date"> <span class="preview__date--day"><?=$dt->format('d');?></span>
                                <p class="preview__date--month"><?=FormatDate('F', $dt->format('U'));?></p>
                            </div>
                            <a class="preview__more" href="<?echo $arItem["URL"]?>">
                                <div class="preview__more--btn">Подробее</div>
                                <div class="preview__more--arrow">
                                    <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="news-item__content--text">
                            <div class="text__title"><?= $arItem["TITLE_FORMATED"]?></div>
                            <div class="text__prefix"><?= $arItem["BODY_FORMATED"]?></div>
                            <a class="text__more" href="<?echo $arItem["URL"]?>">
                                <div class="text__more--btn">Подробее</div>
                                <div class="text__more--arrow">
                                    <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H19L13.6486 6" stroke="#424346" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <?php if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") { ?>
                    <?= $arResult["NAV_STRING"];?>
                <?php } ?>

            <?php } else { ?>
                <?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
            <?php } ?>

        </div>
    </div>
</section>
