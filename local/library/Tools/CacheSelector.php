<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 11.09.2022
 * Time: 19:53
 */

namespace Library\Tools;

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Iblock\IblockTable;
use Bitrix\Iblock\PropertyEnumerationTable;
use Bitrix\Iblock\PropertyTable;
use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Application;
use Bitrix\Main\Data\Cache;
use Bitrix\Main\Loader;
use RuntimeException;

class CacheSelector
{
    /** @var string */
    const DEFAULT_LID = 's1';
    /** @var int */
    const CACHE_TIME = 2592000;

    public static function getCacheTime(): int
    {
        if (defined('CACHETIME_MONTH')) {
            return CACHETIME_MONTH;
        }
        $r = [];
        return self::CACHE_TIME;
    }

    public static function getIblock(string $code, string $iblockTypeId = '', $lid = null, $cacheTime = null): ?array
    {
        Loader::includeModule('iblock');
        if ($code == '') {
            throw new RuntimeException('IBlock CODE can not be empty');
        }

        if (!$lid || $lid == '') {
            $lid = self::DEFAULT_LID;
        }

        $cacheId  = 'getIblock_' . $code . '_' . $iblockTypeId . '_' . $lid;
        $cacheDir = 'CacheSelector';
        $result   = null;

        if (is_null($cacheTime)) {
            $cacheTime = static::getCacheTime();
        } else {
            $cacheTime = (int) $cacheTime;
        }
        $cache = Cache::createInstance();
        if (array_key_exists('clear_cache', $_REQUEST)) {
            $cache->clean($cacheId);
        }
        if ($cache->initCache($cacheTime, $cacheId, $cacheDir)) {
            $result = $cache->getVars();
        } elseif ($cache->startDataCache()) {
            $filter = [
                'LID'            => $lid,
                'IBLOCK_TYPE_ID' => $iblockTypeId,
                'CODE'           => $code,
            ];
            $stmt = IblockTable::getRow([
                'filter' => $filter,
                'limit'  => 1,
                'cache'  => [
                    'ttl' => 0,
                ],
            ]);

            if (!$stmt) {
                $cache->abortDataCache();
            } else {
                $result = $stmt;
            }
            $cache->endDataCache($result);
        }
        return $result;
    }

    public static function getIblockId(string $code, string $iblockTypeId = '', $lid = null, $cacheTime = null): ?int
    {
        $item = self::getIblock($code, $iblockTypeId, $lid, $cacheTime);
        return $item['ID'];
    }

    public static function getIblockProperty(int $iblockId, string $code, $cacheTime = null): ?array
    {
        if (!$iblockId) {
            throw new RuntimeException('IBlock ID can not be empty');
        }
        if ($code == '') {
            throw new RuntimeException('Property CODE can not be empty');
        }
        $cacheId  = 'getIblockProperty_' . $iblockId . $code;
        $cacheDir = 'CacheSelector';
        $result   = null;

        if (is_null($cacheTime)) {
            $cacheTime = static::CACHE_TIME;
        } else {
            $cacheTime = (int) $cacheTime;
        }

        $cache = Cache::createInstance();
        if ($cache->initCache($cacheTime, $cacheId, $cacheDir)) {
            $result = $cache->getVars();
        } elseif ($cache->startDataCache()) {
            $result = PropertyTable::getRow([
                'filter' => [
                    'IBLOCK_ID' => $iblockId,
                    'CODE'      => $code,
                ],
            ]);
            if (!$result) {
                $cache->abortDataCache();
            }

            if ($result['PROPERTY_TYPE'] == 'L') {
                $params = [
                    'filter' => [
                        'PROPERTY_ID' => $result['ID'],
                    ],
                ];
                $values = [];
                $rsList = PropertyEnumerationTable::getList($params);
                while (($item = $rsList->fetch()) != false) {
                    $values[$item['XML_ID']] = $item;
                }
                $result['VALUES'] = $values;
            }

            $cache->endDataCache($result);
        }
        return $result;
    }

    public static function getIblockPropertyId(int $iblockId, string $code, $cacheTime = null): ?int
    {
        $prop   = static::getIblockProperty($iblockId, $code, $cacheTime);
        $result = $prop['ID'] ?? null;
        return $result;
    }

    public static function getStringPropertyListValues(int $propertyId, int $cacheTime = 0): array
    {
        if (!$propertyId) {
            throw new RuntimeException('Property ID can not be empty');
        }
        $result = [];

        $cacheId  = 'getStringPropertyListValues_P' . $propertyId;
        $cacheDir = 'CacheSelector';
        if (!$cacheTime) {
            $cacheTime = static::CACHE_TIME;
        }
        $cache = Cache::createInstance();
        if ($cache->initCache($cacheTime, $cacheId, $cacheDir)) {
            $result = $cache->getVars();
        } elseif ($cache->startDataCache()) {
            $connect = Application::getConnection();

            $sql = "SELECT DISTINCT VALUE FROM `b_iblock_element_property` WHERE IBLOCK_PROPERTY_ID = " . $propertyId;
            $rs  = $connect->query($sql);
            while ($item = $rs->fetch()) {
                $result[] = $item['VALUE'];
            }
            if (!$result) {
                $cache->abortDataCache();
            }
            $cache->endDataCache($result);
        }

        return $result;
    }

    public static function getSectionByCode(int $iblockId, string $code, int $cacheTime = 0): ?array
    {
        if (!$iblockId) {
            throw new RuntimeException('IBlock ID can not be empty');
        }
        if (!$code) {
            throw new RuntimeException('Section CODE can not be empty');
        }

        if (!$cacheTime) {
            $cacheTime = static::CACHE_TIME;
        }

        $result = SectionTable::getRow([
            'select' => ['ID'],
            'filter' => [
                'IBLOCK_ID' => $iblockId,
                'ACTIVE'    => 'Y',
                'CODE'      => $code,
            ],
            'cache' => [
                'ttl' => $cacheTime,
            ],
        ]);
        return $result ?? null;
    }

    public static function getHlBlock(string $name, $cacheTime = null): ?array
    {
        Loader::includeModule('highloadblock');
        $cacheId  = 'getHlBlock' . $name;
        $cacheDir = 'CacheSelector';
        $result   = null;

        if (is_null($cacheTime)) {
            $cacheTime = static::CACHE_TIME;
        } else {
            $cacheTime = (int) $cacheTime;
        }
        $cache = Cache::createInstance();

        if ($cache->initCache($cacheTime, $cacheId, $cacheDir)) {
            $result = $cache->getVars();
        } elseif ($cache->startDataCache()) {
            $sql     = "SELECT ID FROM `b_hlblock_entity` WHERE NAME = '" . $name . "'";
            $connect = Application::getConnection();
            $rs      = $connect->query($sql);
            $result  = $rs->fetch();
            if (!$result) {
                $cache->abortDataCache();
            }
            $cache->endDataCache($result);
        }
        return $result;
    }

    /**
     * @param array|int|string $hlblock Could be a block, ID or NAME of block.
     */
    public static function getHlDataClass($hlblock)
    {
        Loader::includeModule('highloadblock');
        if (!(int) $hlblock) {
            $hlRes   = static::getHlBlock($hlblock);
            $hlblock = $hlRes['ID'];
        }
        $hlBlock   = HighloadBlockTable::getById($hlblock)->fetch();
        $obEntity  = HighloadBlockTable::compileEntity($hlBlock);
        return $obEntity->getDataClass();
    }

    public static function getHlData(string $name, array $select = [], array $order = [], array $filter = []): ?array
    {
        Loader::includeModule("highloadblock");
        $dataClass = static::getHlDataClass($name);

        $selectFields = (!empty($select) ? $select : ['*']);
        $orderFields  = (!empty($order) ? $order : ["ID" => "ASC"]);

        $stmt = $dataClass::getList([
            "select" => $selectFields,
            "order"  => $orderFields,
            "filter" => $filter,
        ]);
        if ($stmt->getSelectedRowsCount() <= 0) {
            return [];
        }
        return $stmt->fetchAll();
    }

    public static function getUserGroup(string $stringId, $cacheTime = null)
    {
        $cacheId  = 'getUserGroup' . $stringId;
        $cacheDir = 'CacheSelector';
        $id       = null;

        if (is_null($cacheTime)) {
            $cacheTime = static::CACHE_TIME;
        } else {
            $cacheTime = (int) $cacheTime;
        }
        $cache = Cache::createInstance();

        if ($cache->initCache($cacheTime, $cacheId, $cacheDir)) {
            $id = $cache->getVars();
        } elseif ($cache->startDataCache()) {
            $sql     = "SELECT ID FROM `b_group` WHERE STRING_ID = '" . $stringId . "'";
            $connect = Application::getConnection();
            $rs      = $connect->query($sql);
            $result  = $rs->fetch();
            $id      = $result['ID'];
            if (!$id) {
                $cache->abortDataCache();
            }
            $cache->endDataCache($id);
        }
        return $id;
    }
}
