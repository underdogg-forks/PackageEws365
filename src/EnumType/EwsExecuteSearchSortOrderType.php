<?php

namespace Ews\EnumType;

/**
 * This class stands for ExecuteSearchSortOrderType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExecuteSearchSortOrderType
{
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
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
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_RELEVANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DATE_TIME,
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
