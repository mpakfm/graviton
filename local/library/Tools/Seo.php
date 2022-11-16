<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    16.11.2022
 * Time:    15:43
 */

namespace Library\Tools;

use Bitrix\Iblock\InheritedProperty\ElementValues;

class Seo
{
    const indexCode    = 'seo-dlya-glavnoy-stranitsy';

    const defaultTitle       = 'Graviton';
    const defaultDescription = 'Graviton';
    const defaultKeywords    = 'Graviton';

    public static function setIndex()
    {
        global $APPLICATION;
        $iblock = CacheSelector::getIblockId('text', 'content');
        $item   = CacheSelector::getIblockElement($iblock, self::indexCode);
        $ipropValues = new ElementValues($iblock,$item['ID']);
        $iproperties  = $ipropValues->getValues();
        $APPLICATION->SetTitle(array_key_exists('ELEMENT_META_TITLE', $iproperties) ? $iproperties['ELEMENT_META_TITLE'] : self::defaultTitle);
        $APPLICATION->SetPageProperty('description', array_key_exists('ELEMENT_META_DESCRIPTION', $iproperties) ? $iproperties['ELEMENT_META_DESCRIPTION'] : self::defaultDescription);
        $APPLICATION->SetPageProperty('keywords', array_key_exists('ELEMENT_META_KEYWORDS', $iproperties) ? $iproperties['ELEMENT_META_KEYWORDS'] : self::defaultKeywords);
    }
}
