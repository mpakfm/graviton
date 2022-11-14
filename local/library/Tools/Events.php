<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    14.11.2022
 * Time:    15:11
 */

namespace Library\Tools;

use Bitrix\Main\Application;
use Bitrix\Main\Data\Cache;

class Events
{
    /** @var int */
    const CACHE_TIME = 3600;

    public static function getCities(int $cacheTime = 0): array
    {
        $cacheId  = 'getCities';
        $cacheDir = 'ToolsEvents';
        if (!$cacheTime) {
            $cacheTime = static::CACHE_TIME;
        }
        $cache = Cache::createInstance();
        if ($cache->initCache($cacheTime, $cacheId, $cacheDir)) {
            $cities = $cache->getVars();
        } elseif ($cache->startDataCache()) {
            $iblockEvents = CacheSelector::getIblockId('events', 'content');
            $propCity = CacheSelector::getIblockProperty($iblockEvents, 'CITY');
            $con = Application::getConnection();
            $sql = "SELECT c.NAME as CITY, c.ID, COUNT(p.ID) as CNT
    FROM b_iblock_element el
    INNER JOIN b_iblock_element_prop_m{$iblockEvents} p ON p.IBLOCK_ELEMENT_ID = el.ID
    INNER JOIN b_iblock_element c ON c.ID = p.VALUE
    WHERE el.IBLOCK_ID = '{$iblockEvents}' AND p.IBLOCK_PROPERTY_ID = '{$propCity['ID']}' AND el.ACTIVE_FROM >= CURRENT_TIMESTAMP
    GROUP BY CITY
    ORDER BY CITY ASC";
            $result = $con->query($sql)->fetchAll();

            $cities = [];
            foreach ($result as $line) {
                $cities[$line['ID']] = $line['CITY'];
            }
            $cache->endDataCache($cities);
        }
        return $cities;
    }
}
