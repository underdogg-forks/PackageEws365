<?php

namespace Ews\EnumType;

/**
 * This class stands for ItemTypesFilterType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItemTypesFilterType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MailItems'
     * @return string 'MailItems'
     */
    const VALUE_MAILITEMS = 'MailItems';
    /**
     * Constant for value 'MailConversations'
     * @return string 'MailConversations'
     */
    const VALUE_MAILCONVERSATIONS = 'MailConversations';
    /**
     * Constant for value 'CalendarItems'
     * @return string 'CalendarItems'
     */
    const VALUE_CALENDARITEMS = 'CalendarItems';
    /**
     * Constant for value 'People'
     * @return string 'People'
     */
    const VALUE_PEOPLE = 'People';
    /**
     * Constant for value 'OneDriveItems'
     * @return string 'OneDriveItems'
     */
    const VALUE_ONEDRIVEITEMS = 'OneDriveItems';
    /**
     * Constant for value 'FileItems'
     * @return string 'FileItems'
     */
    const VALUE_FILEITEMS = 'FileItems';
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
     * @uses self::VALUE_MAILITEMS
     * @uses self::VALUE_MAILCONVERSATIONS
     * @uses self::VALUE_CALENDARITEMS
     * @uses self::VALUE_PEOPLE
     * @uses self::VALUE_ONEDRIVEITEMS
     * @uses self::VALUE_FILEITEMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MAILITEMS,
            self::VALUE_MAILCONVERSATIONS,
            self::VALUE_CALENDARITEMS,
            self::VALUE_PEOPLE,
            self::VALUE_ONEDRIVEITEMS,
            self::VALUE_FILEITEMS,
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
