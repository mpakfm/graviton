<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 13.08.19
 * Time: 11:30
 */

namespace Components\Mpakfm\OneTemplate;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Data\Cache;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class OneTemplate extends \CBitrixComponent
{
    public function onPrepareComponentParams($params): array
    {
        $params = parent::onPrepareComponentParams($params);

        return $params;
    }

    public function executeComponent()
    {
        global $APPLICATION;
        if (isset($this->arParams['HIDE']) && $this->arParams['HIDE'] == 'Y') {
            return;
        }

        $template = 'template';
        if (isset($this->arParams['TEMPLATE']) && $this->arParams['TEMPLATE'] != '') {
            $template = str_replace('.php', '', $this->arParams['TEMPLATE']);
        }

        $page      = preg_replace('/[^a-zA-ZА-Яа-я0-9]/', '_', $APPLICATION->GetCurPage());
        $cacheTime = CACHETIME_MONTH;
        $cacheId   = $this->getTemplateName() . $page . $template . '_' . LANGUAGE_ID;

        $cacheIdExtend = $this->arParams['CACHE_ID_EXTEND'] ?? false;
        if ($cacheIdExtend) {
            $cacheIdExtendStr     = serialize($cacheIdExtend);
            $cacheIdExtendStrHash = sha1($cacheIdExtendStr);

            $cacheId .= '_' . $cacheIdExtendStrHash;
        }

        $cacheDir  = 'oneTemplate';
        $cache     = Cache::createInstance();
        if ((!isset($_REQUEST['clear_cache']) || $_REQUEST['clear_cache'] != 'Y') && $this->arParams['CACHE'] != 'N') {
            if ($cache->initCache($cacheTime, $cacheId, $cacheDir)) {
                $result = $cache->getVars();
            }
            if (!$result) {
                $cache->startDataCache();
                ob_start();
                $this->includeComponentTemplate($template);
                $result = ob_get_clean();
                $cache->endDataCache($result);
            }
        } else {
            $cache->clean($cacheId, $cacheDir);
            ob_start();
            $this->includeComponentTemplate($template);
            $result = ob_get_clean();
        }

        echo $result;
    }
}
