<?php

namespace Ews\EnumType;

/**
 * This class stands for UnifiedGroupsSortType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupsSortType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DisplayName'
     * @return string 'DisplayName'
     */
    const VALUE_DISPLAY_NAME = 'DisplayName';
    /**
     * Constant for value 'JoinDate'
     * @return string 'JoinDate'
     */
    const VALUE_JOIN_DATE = 'JoinDate';
    /**
     * Constant for value 'FavoriteDate'
     * @return string 'FavoriteDate'
     */
    const VALUE_FAVORITE_DATE = 'FavoriteDate';
    /**
     * Constant for value 'Relevance'
     * @return string 'Relevance'
     */
    const VALUE_RELEVANCE = 'Relevance';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DISPLAY_NAME
     * @uses self::VALUE_JOIN_DATE
     * @uses self::VALUE_FAVORITE_DATE
     * @uses self::VALUE_RELEVANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DISPLAY_NAME,
            self::VALUE_JOIN_DATE,
            self::VALUE_FAVORITE_DATE,
            self::VALUE_RELEVANCE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
