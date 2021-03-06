<?php

namespace Ews\EnumType;

/**
 * This class stands for StandardGroupByType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Represents standard groupings for GroupBy queries.
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStandardGroupByType
{
    /**
     * Constant for value 'ConversationTopic'
     * @return string 'ConversationTopic'
     */
    const VALUE_CONVERSATION_TOPIC = 'ConversationTopic';
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
     * @uses self::VALUE_CONVERSATION_TOPIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONVERSATION_TOPIC,
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
