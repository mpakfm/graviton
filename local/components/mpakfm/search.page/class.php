<?php
/**
 * Created by PhpStorm
 * Project: itnmp
 * User:    mpak
 * Date:    14.08.2022
 * Time:    2:35
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

class SearchPage extends \CBitrixComponent
{
    public $exFilter;
    public $customFilter;

    public function onPrepareComponentParams($params): array
    {
        if (!CModule::IncludeModule("search")) {
            throw new RuntimeException(GetMessage("SEARCH_MODULE_UNAVAILABLE"));
        }

        $navPageInSession = CPageOption::GetOptionString('main', 'nav_page_in_session');
        CPageOption::SetOptionString("main", "nav_page_in_session", "N");

        $params = parent::onPrepareComponentParams($params);

        if (!array_key_exists('CACHE_TIME', $params)) {
            $params["CACHE_TIME"] = 3600;
        }

        // activation rating
        CRatingsComponentsMain::GetShowRating($this->arParams);

        $params["SHOW_WHEN"]  = $params["SHOW_WHEN"] == "Y";
        $params["SHOW_WHERE"] = $params["SHOW_WHERE"] != "N";
        if (!is_array($params["arrWHERE"])) {
            $params["arrWHERE"] = [];
        }
        $params["PAGE_RESULT_COUNT"] = intval($params["PAGE_RESULT_COUNT"]);
        if ($params["PAGE_RESULT_COUNT"] <= 0) {
            $params["PAGE_RESULT_COUNT"] = 50;
        }

        $params["PAGER_TITLE"] = trim($params["PAGER_TITLE"]);
        if ($params["PAGER_TITLE"] == '') {
            $params["PAGER_TITLE"] = GetMessage("SEARCH_RESULTS");
        }
        $params["PAGER_SHOW_ALWAYS"] = $params["PAGER_SHOW_ALWAYS"] != "N";
        $params["USE_TITLE_RANK"]    = $params["USE_TITLE_RANK"] == "Y";
        $params["PAGER_TEMPLATE"]    = trim($params["PAGER_TEMPLATE"]);

        if ($params["DEFAULT_SORT"] !== "date") {
            $params["DEFAULT_SORT"] = "rank";
        }

        if ($params["FILTER_NAME"] == '' || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $params["FILTER_NAME"])) {
            $this->customFilter = [];
        } else {
            $this->customFilter = $GLOBALS[$params["FILTER_NAME"]];
            if (!is_array($this->customFilter)) {
                $this->customFilter = [];
            }
        }
        $this->exFilter        = CSearchParameters::ConvertParamsToFilter($params, "arrFILTER");
        $params["CHECK_DATES"] = $params["CHECK_DATES"] == "Y";
        return $params;
    }

    public function executeComponent()
    {
        global $APPLICATION;

        $template = 'template';
        if (isset($this->arParams['TEMPLATE']) && $this->arParams['TEMPLATE'] != '') {
            $template = str_replace('.php', '', $this->arParams['TEMPLATE']);
        }

        //options
        if (isset($_REQUEST["tags"])) {
            $tags = trim($_REQUEST["tags"]);
        } else {
            $tags = false;
        }
        if (isset($_REQUEST["q"])) {
            $q = trim($_REQUEST["q"]);
        } else {
            $q = false;
        }

        if (
            $this->arParams["SHOW_WHEN"]
            && isset($_REQUEST["from"])
            && is_string($_REQUEST["from"])
            && mb_strlen($_REQUEST["from"])
            && CheckDateTime($_REQUEST["from"])
        ) {
            $from = $_REQUEST["from"];
        } else {
            $from = "";
        }

        if (
            $this->arParams["SHOW_WHEN"]
            && isset($_REQUEST["to"])
            && is_string($_REQUEST["to"])
            && mb_strlen($_REQUEST["to"])
            && CheckDateTime($_REQUEST["to"])
        ) {
            $to = $_REQUEST["to"];
        } else {
            $to = "";
        }

        $where = $this->arParams["SHOW_WHERE"] ? trim($_REQUEST["where"]) : "";

        $how = trim($_REQUEST["how"]);
        if ($how == "d") {
            $how = "d";
        } elseif ($how == "r") {
            $how = "";
        } elseif ($this->arParams["DEFAULT_SORT"] == "date") {
            $how = "d";
        } else {
            $how = "";
        }

        if ($this->arParams["USE_TITLE_RANK"]) {
            if ($how == "d") {
                $aSort = ["DATE_CHANGE" => "DESC", "CUSTOM_RANK" => "DESC", "TITLE_RANK" => "DESC", "RANK" => "DESC"];
            } else {
                $aSort = ["CUSTOM_RANK" => "DESC", "TITLE_RANK" => "DESC", "RANK" => "DESC", "DATE_CHANGE" => "DESC"];
            }
        } else {
            if ($how == "d") {
                $aSort = ["DATE_CHANGE" => "DESC", "CUSTOM_RANK" => "DESC", "RANK" => "DESC"];
            } else {
                $aSort = ["CUSTOM_RANK" => "DESC", "RANK" => "DESC", "DATE_CHANGE" => "DESC"];
            }
        }

        $arrDropdown = [];

        // Getting of the Information block types
        $arIBlockTypes = [];
        if (CModule::IncludeModule("iblock")) {
            $rsIBlockType = CIBlockType::GetList(["sort" => "asc"], ["ACTIVE" => "Y"]);
            while ($arIBlockType = $rsIBlockType->Fetch()) {
                if ($ar = CIBlockType::GetByIDLang($arIBlockType["ID"], LANGUAGE_ID)) {
                    $arIBlockTypes[$arIBlockType["ID"]] = $ar["~NAME"];
                }
            }
        }
        // Creating of an array for drop-down list
        foreach ($this->arParams["arrWHERE"] as $code) {
            [$module_id, $part_id] = explode("_", $code, 2);
            if ($module_id <> '') {
                if ($part_id == '') {
                    switch ($module_id) {
                        case "forum":
                            $arrDropdown[$code] = GetMessage("SEARCH_FORUM");
                            break;
                        case "blog":
                            $arrDropdown[$code] = GetMessage("SEARCH_BLOG");
                            break;
                        case "socialnetwork":
                            $arrDropdown[$code] = GetMessage("SEARCH_SOCIALNETWORK");
                            break;
                        case "intranet":
                            $arrDropdown[$code] = GetMessage("SEARCH_INTRANET");
                            break;
                        case "crm":
                            $arrDropdown[$code] = GetMessage("SEARCH_CRM");
                            break;
                        case "disk":
                            $arrDropdown[$code] = GetMessage("SEARCH_DISK");
                            break;
                    }
                } else {
                    // if there is additional information specified besides ID then
                    switch ($module_id) {
                        case "iblock":
                            if (isset($arIBlockTypes[$part_id])) {
                                $arrDropdown[$code] = $arIBlockTypes[$part_id];
                            }
                            break;
                    }
                }
            }
        }

        $this->arResult["DROPDOWN"]         = htmlspecialcharsex($arrDropdown);
        $this->arResult["REQUEST"]["HOW"]   = htmlspecialcharsbx($how);
        $this->arResult["REQUEST"]["~FROM"] = $from;
        $this->arResult["REQUEST"]["FROM"]  = htmlspecialcharsbx($from);
        $this->arResult["REQUEST"]["~TO"]   = $to;
        $this->arResult["REQUEST"]["TO"]    = htmlspecialcharsbx($to);

        if ($q !== false) {
            if ($this->arParams["USE_LANGUAGE_GUESS"] == "N" || isset($_REQUEST["spell"])) {
                $this->arResult["REQUEST"]["~QUERY"] = $q;
                $this->arResult["REQUEST"]["QUERY"]  = htmlspecialcharsex($q);
            } else {
                $arLang = CSearchLanguage::GuessLanguage($q);
                if (is_array($arLang) && $arLang["from"] != $arLang["to"]) {
                    $this->arResult["REQUEST"]["~ORIGINAL_QUERY"] = $q;
                    $this->arResult["REQUEST"]["ORIGINAL_QUERY"]  = htmlspecialcharsex($q);

                    $this->arResult["REQUEST"]["~QUERY"] = CSearchLanguage::ConvertKeyboardLayout($this->arResult["REQUEST"]["~ORIGINAL_QUERY"], $arLang["from"], $arLang["to"]);
                    $this->arResult["REQUEST"]["QUERY"]  = htmlspecialcharsex($this->arResult["REQUEST"]["~QUERY"]);
                } else {
                    $this->arResult["REQUEST"]["~QUERY"] = $q;
                    $this->arResult["REQUEST"]["QUERY"]  = htmlspecialcharsex($q);
                }
            }
        } else {
            $this->arResult["REQUEST"]["~QUERY"] = false;
            $this->arResult["REQUEST"]["QUERY"]  = false;
        }

        if ($tags !== false) {
            $this->arResult["REQUEST"]["~TAGS_ARRAY"] = [];
            $arTags                                   = explode(",", $tags);
            foreach ($arTags as $tag) {
                $tag = trim($tag);
                if ($tag <> '') {
                    $this->arResult["REQUEST"]["~TAGS_ARRAY"][$tag] = $tag;
                }
            }
            $this->arResult["REQUEST"]["TAGS_ARRAY"] = htmlspecialcharsex($this->arResult["REQUEST"]["~TAGS_ARRAY"]);
            $this->arResult["REQUEST"]["~TAGS"]      = implode(",", $this->arResult["REQUEST"]["~TAGS_ARRAY"]);
            $this->arResult["REQUEST"]["TAGS"]       = htmlspecialcharsex($this->arResult["REQUEST"]["~TAGS"]);
        } else {
            $this->arResult["REQUEST"]["~TAGS_ARRAY"] = [];
            $this->arResult["REQUEST"]["TAGS_ARRAY"]  = [];
            $this->arResult["REQUEST"]["~TAGS"]       = false;
            $this->arResult["REQUEST"]["TAGS"]        = false;
        }
        $this->arResult["REQUEST"]["WHERE"] = htmlspecialcharsbx($where);

        $this->arResult["URL"] = $APPLICATION->GetCurPage()
            . "?q=" . urlencode($q)
            . (isset($_REQUEST["spell"]) ? "&amp;spell=1" : "")
            . "&amp;where=" . urlencode($where)
            . ($tags !== false ? "&amp;tags=" . urlencode($tags) : "");

        if (isset($this->arResult["REQUEST"]["~ORIGINAL_QUERY"])) {
            $this->arResult["ORIGINAL_QUERY_URL"] = $APPLICATION->GetCurPage()
                . "?q=" . urlencode($this->arResult["REQUEST"]["~ORIGINAL_QUERY"])
                . "&amp;spell=1"
                . "&amp;where=" . urlencode($this->arResult["REQUEST"]["WHERE"])
                . ($this->arResult["REQUEST"]["HOW"] == "d" ? "&amp;how=d" : "")
                . ($this->arResult["REQUEST"]["FROM"] ? '&amp;from=' . urlencode($this->arResult["REQUEST"]["~FROM"]) : "")
                . ($this->arResult["REQUEST"]["TO"] ? '&amp;to=' . urlencode($this->arResult["REQUEST"]["~TO"]) : "")
                . ($tags !== false ? "&amp;tags=" . urlencode($tags) : "");
        }

        $arFilter = [
            "SITE_ID" => SITE_ID,
            "QUERY"   => $this->arResult["REQUEST"]["~QUERY"],
            "TAGS"    => $this->arResult["REQUEST"]["~TAGS"],
        ];

        $arFilter = array_merge($this->customFilter, $arFilter);
        if ($where <> '') {
            [$module_id, $part_id] = explode("_", $where, 2);
            $arFilter["MODULE_ID"] = $module_id;
            if ($part_id <> '') {
                $arFilter["PARAM1"] = $part_id;
            }
        }
        if ($this->arParams["CHECK_DATES"]) {
            $arFilter["CHECK_DATES"] = "Y";
        }
        if ($from) {
            $arFilter[">=DATE_CHANGE"] = $from;
        }
        if ($to) {
            $arFilter["<=DATE_CHANGE"] = $to;
        }

        $obSearch = new CSearch();

        //When restart option is set we will ignore error on query with only stop words
        $obSearch->SetOptions([
            "ERROR_ON_EMPTY_STEM" => $this->arParams["RESTART"] != "Y",
            "NO_WORD_LOGIC"       => $this->arParams["NO_WORD_LOGIC"] == "Y",
        ]);

        $obSearch->Search($arFilter, $aSort, $this->exFilter);

        $this->arResult["ERROR_CODE"] = $obSearch->errorno;
        $this->arResult["ERROR_TEXT"] = $obSearch->error;

        $this->arResult["SEARCH"] = [];

        if ($obSearch->errorno == 0) {
            $obSearch->NavStart($this->arParams["PAGE_RESULT_COUNT"], false);
            $ar = $obSearch->GetNext();
            //Search restart
            if (!$ar && ($this->arParams["RESTART"] == "Y") && $obSearch->Query->bStemming) {
                $obSearch                   = new CSearch();
                $this->exFilter["STEMMING"] = false;
                $obSearch->Search($arFilter, $aSort, $this->exFilter);

                $this->arResult["ERROR_CODE"] = $obSearch->errorno;
                $this->arResult["ERROR_TEXT"] = $obSearch->error;

                if ($obSearch->errorno == 0) {
                    $obSearch->NavStart($this->arParams["PAGE_RESULT_COUNT"], false);
                    $ar = $obSearch->GetNext();
                }
            }

            $arReturn = [];
            while ($ar) {
                $arReturn[$ar["ID"]] = $ar["ITEM_ID"];
                $ar["CHAIN_PATH"]    = $APPLICATION->GetNavChain($ar["URL"], 0, $folderPath . "/chain_template.php", true, false);
                $ar["URL"]           = htmlspecialcharsbx($ar["URL"]);
                $ar["TAGS"]          = [];
                if (!empty($ar["~TAGS_FORMATED"])) {
                    foreach ($ar["~TAGS_FORMATED"] as $name => $tag) {
                        if ($this->arParams["TAGS_INHERIT"] == "Y") {
                            $arTags       = $this->arResult["REQUEST"]["~TAGS_ARRAY"];
                            $arTags[$tag] = $tag;
                            $tags         = implode(",", $arTags);
                        } else {
                            $tags = $tag;
                        }
                        $ar["TAGS"][] = [
                            "URL"      => $APPLICATION->GetCurPageParam("tags=" . urlencode($tags), ["tags"]),
                            "TAG_NAME" => htmlspecialcharsex($name),
                        ];
                    }
                }
                $this->arResult["SEARCH"][] = $ar;
                $ar                         = $obSearch->GetNext();
            }

            $navComponentObject                = null;
            $this->arResult["NAV_STRING"]      = $obSearch->GetPageNavStringEx($navComponentObject, $this->arParams["PAGER_TITLE"], $this->arParams["PAGER_TEMPLATE"], $this->arParams["PAGER_SHOW_ALWAYS"]);
            $this->arResult["NAV_CACHED_DATA"] = $navComponentObject->GetTemplateCachedData();
            $this->arResult["NAV_RESULT"]      = $obSearch;
            \Mpakfm\Printu::obj($this->arResult["NAV_RESULT"])->title('[CLASS] NAV_RESULT');
            \Mpakfm\Printu::obj($this->arResult["NAV_RESULT"]->NavRecordCount)->title('[CLASS] NAV_RESULT NavRecordCount');

            $this->arResult["TAGS_CHAIN"] = [];
            $url                          = [];
            foreach ($this->arResult["REQUEST"]["~TAGS_ARRAY"] as $key => $tag) {
                $url_without = $this->arResult["REQUEST"]["~TAGS_ARRAY"];
                unset($url_without[$key]);
                $url[$tag] = $tag;
                $result    = [
                    "TAG_NAME"    => $tag,
                    "TAG_PATH"    => $APPLICATION->GetCurPageParam("tags=" . urlencode(implode(",", $url)), ["tags"]),
                    "TAG_WITHOUT" => $APPLICATION->GetCurPageParam("tags=" . urlencode(implode(",", $url_without)), ["tags"]),
                ];
                $this->arResult["TAGS_CHAIN"][] = $result;
            }
        }

        if (isset($_REQUEST["ajax"]) && $_REQUEST["ajax"] === "Y") {
            $this->setFrameMode(false);
            ob_start();
            $this->IncludeComponentTemplate("ajax");
            $json = ob_get_contents();
            $APPLICATION->RestartBuffer();
            while (ob_end_clean());
            CMain::FinalActions($json);
        } else {
            $this->IncludeComponentTemplate($template);
        }
    }
}
