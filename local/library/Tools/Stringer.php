<?php
/**
 * Created by PhpStorm.
 * User: mpak
 * Date: 13.08.19
 * Time: 17:37
 */

namespace Library\Tools;

use DateTimeImmutable;

class Stringer
{
    public static function cropStr(string $str, int $size)
    {
        if (!$str) {
            return $str;
        }
        return mb_substr($str, 0, mb_strrpos(mb_substr($str, 0, $size, 'utf-8'), ' ', 0, 'utf-8'), 'utf-8');
    }

    public static function plural(int $n, array $forms): string
    {
        if (empty($forms)) {
            return '';
        }

        if (!defined(LANGUAGE_ID)) {
            $lang = 'ru';
        } else {
            $lang = LANGUAGE_ID;
        }
        switch ($lang) {
            case 'ru':
            case 'ua':
                $p = $n % 10 == 1 && $n % 100 != 11 ? 0 : ($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20) ? 1 : 2);
                break;
            case 'en':
            case 'de':
            case 'es':
            default:
                $p = $n == 1 ? 0 : 1;
                break;
        }

        return $forms[$p] ?? end($forms);
    }

    /**
     * Стандартный возврат обьекта даты с полей Bitrix где неизвестно сохранено в временем или только дата.
     * Допустимые форматы: d.m.Y H:i:s и d.m.Y
     */
    public static function getDateTime(?string $datetime): ?DateTimeImmutable
    {
        if (!$datetime || $datetime == '') {
            return null;
        }
        if (strpos($datetime, ' ') !== false) {
            $dt = DateTimeImmutable::createFromFormat('d.m.Y H:i:s', $datetime);
        } else {
            $dt = DateTimeImmutable::createFromFormat('d.m.Y', $datetime);
        }
        return $dt;
    }

    public static function picture($url = '', $class = '', $alt = ''): string
    {
        $pathname  = substr($url, 0, strlen($url) - 3);
        $extension = substr($url, -3);
        $result    = '<picture>';
        if ($extension != 'svg') {
            $result .= '<source ' . (strpos($class, 'lazy') !== false ? 'data-srcset' : 'srcset') . '="' . $url . '" type="image/' . ($extension == 'jpg' ? 'jpeg' : 'png') . '" class="' . $class . '"></source>';
        }
        $result .= '<img ' . (strpos($class, 'slick') !== false ? 'data-lazy' : (strpos($class, 'lazy') !== false ? 'data-src' : 'src')) . '=" ' . $url . '" alt="' . $alt . '" class="' . $class . '"></picture>';

        return $result;
    }

    public static function mbUcFirst(string $str): string
    {
        $fc = mb_strtoupper(mb_substr($str, 0, 1));
        return $fc . mb_substr($str, 1);
    }

    public static function translateStr(string $phrase): string
    {
        $translate = [
            'q' => 'й', 'w' => 'ц', 'e' => 'у', 'r' => 'к', 't' => 'е', 'y' => 'н', 'u' => 'г', 'i' => 'ш', 'o' => 'щ', 'p' => 'з', '[' => 'х', ']' => 'ъ',
            'a' => 'ф', 's' => 'ы', 'd' => 'в', 'f' => 'а', 'g' => 'п', 'h' => 'р', 'j' => 'о', 'k' => 'л', 'l' => 'д', ';' => 'ж', "'" => 'э',
            'z' => 'я', 'x' => 'ч', 'c' => 'с', 'v' => 'м', 'b' => 'и', 'n' => 'т', 'm' => 'ь', ',' => 'б', '.' => 'ю', '/' => '.',

            'Q' => 'Й', 'W' => 'Ц', 'E' => 'У', 'R' => 'К', 'T' => 'Е', 'Y' => 'Н', 'U' => 'Г', 'I' => 'Ш', 'O' => 'Щ', 'P' => 'З', '{' => 'Х', '}' => 'Ъ',
            'A' => 'Ф', 'S' => 'Ы', 'D' => 'В', 'F' => 'А', 'G' => 'П', 'H' => 'Р', 'J' => 'О', 'K' => 'Л', 'L' => 'Д', ':' => 'Ж', '"' => 'Э',
            'Z' => 'Я', 'X' => 'Ч', 'C' => 'С', 'V' => 'М', 'B' => 'И', 'N' => 'Т', 'M' => 'Ь', '<' => 'Б', '>' => 'Ю', '?' => ',',

            'й' => 'q', 'ц' => 'w', 'у' => 'e', 'к' => 'r', 'е' => 't', 'н' => 'y', 'г' => 'u', 'ш' => 'i', 'щ' => 'o', 'з' => 'p', 'х' => '[', 'ъ' => ']',
            'ф' => 'a', 'ы' => 's', 'в' => 'd', 'а' => 'f', 'п' => 'g', 'р' => 'h', 'о' => 'j', 'л' => 'k', 'д' => 'l', 'ж' => ';', "э" => "'",
            'я' => 'z', 'ч' => 'x', 'с' => 'c', 'м' => 'v', 'и' => 'b', 'т' => 'n', 'ь' => 'm', 'б' => ',', 'ю' => '.',

            'Й' => 'Q', 'Ц' => 'W', 'У' => 'E', 'К' => 'R', 'Е' => 'T', 'Н' => 'Y', 'Г' => 'U', 'Ш' => 'I', 'Щ' => 'O', 'З' => 'P', 'Х' => '{', 'Ъ' => '{',
            'Ф' => 'A', 'Ы' => 'S', 'В' => 'D', 'А' => 'F', 'П' => 'G', 'Р' => 'H', 'О' => 'J', 'Л' => 'K', 'Д' => 'L', 'Ж' => ':', 'Э' => '"',
            'Я' => 'Z', 'Ч' => 'X', 'С' => 'C', 'М' => 'V', 'И' => 'B', 'Т' => 'N', 'Ь' => 'M', 'Б' => '<', 'Ю' => '>',
        ];
        $length     = mb_strlen($phrase);
        $replaceStr = '';
        $str        = [];
        $string     = $phrase;
        while ($length) {
            $str[]  = mb_substr($string, 0, 1, "UTF-8");
            $string = mb_substr($string, 1, $length, "UTF-8");
            $length = mb_strlen($string);
        }
        $length     = mb_strlen($phrase);
        for ($i = 0; $i < $length; $i++) {
            $target = $str[$i];
            if (!isset($translate[$target])) {
                $replaceStr .= $target;
                continue;
            }
            $phrase[$i] = $translate[$target];
            $replaceStr .= $translate[$target];
        }
        return $replaceStr;
    }
}
