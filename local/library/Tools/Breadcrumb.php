<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    07.10.2022
 * Time:    0:10
 */

namespace Library\Tools;

use CIBlockElement;
use CIBlockSection;

class Breadcrumb
{
    /** @var array */
    public $iblock;
    /** @var array */
    protected $parts;
    /** @var array */
    public $uriSections;
    /** @var array */
    public $uriItem;

    public static $chain;

    /** @var Breadcrumb */
    public static $obj;

    public static function init(): Breadcrumb
    {
        if (!self::$obj) {
            self::$obj = new Breadcrumb();
        }
        return self::$obj;
    }

    private function __construct()
    {
        $uri         = ($_SERVER['QUERY_STRING'] != '' ? str_replace('?' . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']) : $_SERVER['REQUEST_URI']);
        $this->parts = explode('/', $uri);
    }

    public function setIblock(string $code, string $type): Breadcrumb
    {
        $this->iblock = CacheSelector::getIblock($code, $type);
        return $this;
    }

    public function setChain(string $exclude = '')
    {
        if (self::$chain) {
            return;
        }
        $url = '/';
        $sefFolder = false;
        if ($exclude != '') {
            $sefFolder = $exclude;
        }
        if ($sefFolder) {
            $url .= $sefFolder . '/';
            self::$chain[] = [
                'type' => 'section',
                'link' => "{$url}",
                'name' => $this->iblock['NAME'],
            ];
        }

        foreach ($this->parts as $part) {
            if (empty($part) || ($sefFolder && $part == '/' . $sefFolder . '/')) {
                continue;
            }
            $section = CIBlockSection::GetList([], ['CODE' => $part, 'IBLOCK_ID' => $this->iblock['ID']])->Fetch();
            if ($section) {
                $this->uriSections[] = $part;
                $url .= $part . '/';
                self::$chain[] = [
                    'type' => 'section',
                    'link' => $url,
                    'code' => $section['CODE'],
                    'name' => $section['NAME'],
                ];
                continue;
            }
            $item = CIBlockElement::GetList([], ['CODE' => $part, 'IBLOCK_ID' => $this->iblock['ID']])->Fetch();
            if ($item) {
                $url .= $part . '/';
                $this->uriItem[] = $part;
                self::$chain[] = [
                    'type' => 'item',
                    'link' => $url,
                    'code' => $item['CODE'],
                    'name' => $item['NAME'],
                ];
            }
        }
    }
}
