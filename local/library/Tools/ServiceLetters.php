<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    13.11.2022
 * Time:    16:23
 */

namespace Library\Tools;

use Bitrix\Main\Application;

class ServiceLetters
{
    public static function getLetters()
    {
        $iblockCentres = CacheSelector::getIblockId('centres', 'content');
        $iblockCities  = CacheSelector::getIblockId('city', 'references');
        $propCity = CacheSelector::getIblockProperty($iblockCentres, 'CITY');
        $con = Application::getConnection();
        $sql = "SELECT SUBSTRING(c.NAME, 1, 1) as LETTER
        FROM b_iblock_element el
        INNER JOIN b_iblock_element_property p ON p.IBLOCK_ELEMENT_ID = el.ID
        INNER JOIN b_iblock_element c ON c.ID = p.VALUE
        WHERE el.IBLOCK_ID = '{$iblockCentres}' AND p.IBLOCK_PROPERTY_ID = '{$propCity['ID']}'
        GROUP BY LETTER
        ORDER BY LETTER ASC";
        $stmt = $con->query($sql);
        $letters = [];
        while ($item = $stmt->fetch()) {
            $letters[] = $item['LETTER'];
        }
        return $letters;
    }

    public static function getCities()
    {
        $iblockCentres = CacheSelector::getIblockId('centres', 'content');
        $propCity = CacheSelector::getIblockProperty($iblockCentres, 'CITY');
        $con = Application::getConnection();
        $sql = "SELECT c.NAME as CITY, c.ID, SUBSTRING(c.NAME, 1, 1) as LETTER
FROM b_iblock_element el
        INNER JOIN b_iblock_element_property p ON p.IBLOCK_ELEMENT_ID = el.ID
        INNER JOIN b_iblock_element c ON c.ID = p.VALUE
        WHERE el.IBLOCK_ID = '{$iblockCentres}' AND p.IBLOCK_PROPERTY_ID = '{$propCity['ID']}'
        GROUP BY CITY
        ORDER BY CITY ASC";
        $result = $con->query($sql)->fetchAll();

        $letters = [];
        foreach ($result as $line) {
            $letters[$line['LETTER']][] = [
                'ID'   => $line['ID'],
                'NAME' => $line['CITY'],
            ];
        }
        return $letters;
    }

    public static function getFull()
    {
        $iblockCentres = CacheSelector::getIblockId('centres', 'content');

        $propCenter = CacheSelector::getIblockProperty($iblockCentres, 'CENTER');
        $propCity   = CacheSelector::getIblockProperty($iblockCentres, 'CITY');
        $propWork   = CacheSelector::getIblockProperty($iblockCentres, 'WORK');
        $propAdress = CacheSelector::getIblockProperty($iblockCentres, 'ADDRESS');
        $propPhone1 = CacheSelector::getIblockProperty($iblockCentres, 'PHONE1');
        $propPhone2 = CacheSelector::getIblockProperty($iblockCentres, 'PHONE2');
        $propEmail  = CacheSelector::getIblockProperty($iblockCentres, 'EMAIL');

        $con = Application::getConnection();
        $sql = "SELECT el.ID, el.NAME, c.NAME as CITY, c.ID as CITY_ID, SUBSTRING(c.NAME, 1, 1) as LETTER,
        ct.VALUE as CENTER, w.VALUE as WORK, a.VALUE as ADDRESS, ph1.VALUE as PHONE1, ph2.VALUE as PHONE2, e.VALUE as EMAIL 
        FROM b_iblock_element el
        INNER JOIN b_iblock_element_property p ON p.IBLOCK_ELEMENT_ID = el.ID
        INNER JOIN b_iblock_element c ON c.ID = p.VALUE
        INNER JOIN b_iblock_element_property ct ON ct.IBLOCK_ELEMENT_ID = el.ID AND ct.IBLOCK_PROPERTY_ID = '{$propCenter['ID']}'
        LEFT JOIN b_iblock_element_property w ON w.IBLOCK_ELEMENT_ID = el.ID AND w.IBLOCK_PROPERTY_ID = '{$propWork['ID']}'
        LEFT JOIN b_iblock_element_property a ON a.IBLOCK_ELEMENT_ID = el.ID AND a.IBLOCK_PROPERTY_ID = '{$propAdress['ID']}'
        LEFT JOIN b_iblock_element_property ph1 ON ph1.IBLOCK_ELEMENT_ID = el.ID AND ph1.IBLOCK_PROPERTY_ID = '{$propPhone1['ID']}'
        LEFT JOIN b_iblock_element_property ph2 ON ph2.IBLOCK_ELEMENT_ID = el.ID AND ph2.IBLOCK_PROPERTY_ID = '{$propPhone2['ID']}'
        LEFT JOIN b_iblock_element_property e ON e.IBLOCK_ELEMENT_ID = el.ID AND e.IBLOCK_PROPERTY_ID = '{$propEmail['ID']}'
        WHERE el.IBLOCK_ID = '{$iblockCentres}' AND p.IBLOCK_PROPERTY_ID = '{$propCity['ID']}'
        ";
        $stmt = $con->query($sql);
        $items = [];
        while ($item = $stmt->fetch()) {
            $center = explode(',', $item['CENTER']);
            $item['CENTER'] = $center;
            $items[$item['CITY_ID']][] = $item;
        }
        return $items;
    }
}
