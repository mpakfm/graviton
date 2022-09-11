<?php
/**
 * Created by PhpStorm
 * Project: itnmp
 * User:    mpak
 * Date: 11.09.2022
 * Time: 19:53
 */

namespace Library\Tools;

class EnumAbstract
{
    public static function getConstantNames(): array
    {
        return array_flip((new \ReflectionClass(get_called_class()))->getConstants());
    }

    public static function getEnumIds(): array
    {
        return array_keys(static::getConstantNames());
    }

    /**
     * @param int|string|null $enumId
     */
    public static function isValidId($enumId): bool
    {
        $constantNames = static::getConstantNames();
        return isset($constantNames[$enumId]);
    }

    /**
     * @return string[]
     */
    public static function getSystemNames(): array
    {
        return array_map('strtolower', static::getConstantNames());
    }

    /**
     * @return int|string|null
     * @param mixed $name
     */
    public static function getIdBySystemName($name)
    {
        return array_flip(static::getSystemNames())[$name] ?? null;
    }

    /**
     * @param int|string|null $enumId
     * @return string|null
     */
    public static function getSystemName($enumId)
    {
        return static::getSystemNames()[$enumId] ?? null;
    }

    /**
     * @return string[] id => english name
     */
    public static function getEnglishNames(): array
    {
        return static::getSystemNames();
    }

    /**
     * @param int|string|null $enumId
     * @return string|null
     */
    public static function getEnglishName($enumId)
    {
        return static::getEnglishNames()[$enumId] ?? null;
    }

    /**
     * @return string[] id => russian name
     */
    public static function getRussianNames(): array
    {
        return static::getSystemNames();
    }

    /**
     * @param int|string|null $enumId
     * @return string|null
     */
    public static function getRussianName($enumId)
    {
        return static::getRussianNames()[$enumId] ?? null;
    }
}
