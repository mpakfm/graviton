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
    /** @var string */
    public $bodyStr = 'data-scroll-container';

    /** @var array */
    public static $chain;
    /** @var string */
    public static $uri;
    /** @var string */
    public static $code;
    /** @var array */
    public static $menuActivCodes;
    /** @var bool */
    public static $isSectionNotFound;
    /** @var bool */
    public static $isItemNotFound;

    /** @var Breadcrumb */
    public static $obj;

    public static function init(): Breadcrumb
    {
        if (!self::$obj) {
            self::$obj = new Breadcrumb();
            if (strpos($_SERVER['REQUEST_URI'], '/catalog') === 0) {
                self::$obj->setIblock('product', 'catalog')->setChain(str_replace('/', '', 'catalog'));
            } elseif (strpos($_SERVER['REQUEST_URI'], '/events') === 0) {
                self::$obj->setIblock('events', 'content')->setChain('events');
            } elseif (strpos($_SERVER['REQUEST_URI'], '/news') === 0) {
                self::$obj->setIblock('news', 'content')->setChain('news');
            } elseif (strpos($_SERVER['REQUEST_URI'], '/cases') === 0) {
                self::$obj->setIblock('cases', 'content')->setChain('cases');
            } elseif (strpos($_SERVER['REQUEST_URI'], '/partners') === 0) {
                self::$obj->setIblock('partners', 'content')->setChain('partners');
            } elseif (strpos($_SERVER['REQUEST_URI'], '/contacts') === 0) {
                self::$obj->setChain('', [
                    'type' => 'section',
                    'link' => '/contacts',
                    'name' => "Контакты",
                ]);
            } elseif (strpos($_SERVER['REQUEST_URI'], '/page/') === 0) {
                self::$obj->setIblock('pages', 'content')->setChain();
            }
        }
        return self::$obj;
    }

    private function __construct()
    {
        $uri    = ($_SERVER['QUERY_STRING'] != '' ? str_replace('?' . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']) : $_SERVER['REQUEST_URI']);
        $uriTmp = explode('?', $uri);
        $parts  = explode('/', $uriTmp[0]);

        $this->parts = array_diff($parts, ['']);
    }

    public function isIndex()
    {
        return (empty($this->parts));
    }

    public function setIblock(string $code, string $type): Breadcrumb
    {
        $this->iblock = CacheSelector::getIblock($code, $type);
        return $this;
    }

    public function setChain(string $exclude = '', array $chain = [])
    {
        if (self::$chain) {
            return;
        }

        $url = '/';
        $sefFolder = false;
        if ($exclude != '') {
            $sefFolder = $exclude;
        }
        if (!$this->iblock && !empty($chain)) {
            self::$chain[] = [
                'type' => $chain['section'],
                'link' => $chain['link'],
                'name' => $chain['name'],
            ];
            self::$menuActivCodes[] = str_replace('/', '', $chain['link']);

            $last = count(self::$chain) - 1;
            self::$uri  = self::$chain[$last]['link'];
            self::$code = self::$chain[$last]['code'];

            return;
        }
        if ($sefFolder) {
            $url .= $sefFolder . '/';
            self::$chain[] = [
                'type' => 'section',
                'link' => "{$url}",
                'name' => $this->iblock['NAME'],
            ];
            self::$menuActivCodes[] = str_replace('/', '', $url);
        }

        foreach ($this->parts as $part) {
            if (empty($part) || ($sefFolder && $part == $sefFolder) || ($sefFolder && $part == '/' . $sefFolder . '/') || ($sefFolder && $part == '/' . $sefFolder)) {
                continue;
            }
            if ($this->iblock['ID']) {
                $section = CIBlockSection::GetList([], ['CODE' => $part, 'IBLOCK_ID' => $this->iblock['ID']])->Fetch();
                if ($section) {
                    $this->uriSections[] = $part;
                    $url .= $part . '/';
                    self::$chain[] = [
                        'type' => 'section',
                        'link' => ($this->parts[1] == 'page' ? '/page' . $url : $url ),
                        'code' => $section['CODE'],
                        'name' => $section['NAME'],
                    ];
                    self::$menuActivCodes[] = $section['CODE'];
                    continue;
                } else {
                    self::$isSectionNotFound = true;
                }
                $item = CIBlockElement::GetList([], ['CODE' => $part, 'IBLOCK_ID' => $this->iblock['ID']])->Fetch();
                if ($item) {
                    //$url .= $part . '/';
                    $url .= $part;
                    $this->uriItem[] = $part;
                    self::$chain[] = [
                        'type' => 'item',
                        'link' => ($this->parts[1] == 'page' ? '/page' . $url : $url ),
                        'code' => $item['CODE'],
                        'name' => $item['NAME'],
                    ];
                    self::$menuActivCodes[] = $item['CODE'];
                    self::$isSectionNotFound = null;
                } else {
                    self::$isItemNotFound = true;
                }
            }
        }
        if (!empty(self::$chain)) {
            $last = count(self::$chain) - 1;
            self::$uri  = self::$chain[$last]['link'];
            self::$code = self::$chain[$last]['code'];
        }
    }

    public function setBodyClass()
    {
        global $USER;

        if ($this->isIndex() && !$USER->IsAdmin()) {
            $this->bodyStr = 'data-scroll-container class="isIndexVideoShowed"';
        }

        if (defined("BODY_CLASS")) {
            switch (BODY_CLASS) {
                case"CATALOG":
                    if ($this->uriItem) {
                        $this->bodyStr = 'class="product-page" data-scroll-container style="background-image: url(img/bg/product_page.jpg)"';
                    } else {
                        $this->bodyStr = 'class="catalog-page" data-scroll-container style="background-image: url(img/catalog-page/back.png)"';
                    }
                    break;
                case"NEWS":
                    if ($this->uriItem) {
                        $this->bodyStr = 'class="news-detail-page" data-scroll-container';
                    } else {
                        $this->bodyStr = 'class="news-page" data-scroll-container';
                    }
                    break;
                case"CASES":
                    $this->bodyStr = 'class="cases-page" data-scroll-container';
                    break;
                case"EVENTS":
                    $this->bodyStr = 'class="events-page" data-scroll-container';
                    break;
                case"ABOUT":
                    $this->bodyStr = 'class="about-page" data-scroll-container';
                    break;
                case"SUPPORT":
                    $this->bodyStr = 'class="support-page" data-scroll-container';
                    break;
                case"SERVICE-LEGAL":
                    $this->bodyStr = 'class="legal_support-page" data-scroll-container';
                    break;
                case"SERVICE-DRIVERS":
                    $this->bodyStr = 'class="drivers-page" data-scroll-container';
                    break;
                case"SERVICE-ODM":
                    $this->bodyStr = 'class="service-page service-page-1" data-scroll-container';
                    break;
                case"SERVICE-OEM":
                    $this->bodyStr = 'class="service-page service-page-2" data-scroll-container';
                    break;
                case"SEARCH":
                    $this->bodyStr = 'class="searching_results-page" data-scroll-container';
                    break;
            }
        }
    }
}
