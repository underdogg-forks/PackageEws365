<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserConfigurationDictionaryObjectType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationDictionaryObjectType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $Value;
    /**
     * Constructor method for UserConfigurationDictionaryObjectType
     * @uses EwsUserConfigurationDictionaryObjectType::setType()
     * @uses EwsUserConfigurationDictionaryObjectType::setValue()
     * @param string $type
     * @param string[] $value
     */
    public function __construct($type = null, array $value = array())
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Ews\EnumType\EwsUserConfigurationDictionaryObjectTypesType::valueIsValid()
     * @uses \Ews\EnumType\EwsUserConfigurationDictionaryObjectTypesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Ews\StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUserConfigurationDictionaryObjectTypesType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Ews\EnumType\EwsUserConfigurationDictionaryObjectTypesType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Value value
     * @return string[]
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @throws \InvalidArgumentException
     * @param string[] $value
     * @return \Ews\StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function setValue(array $value = array())
    {
        foreach ($value as $userConfigurationDictionaryObjectTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($userConfigurationDictionaryObjectTypeValueItem)) {
                throw new \InvalidArgumentException(sprintf('The Value property can only contain items of string, "%s" given', is_object($userConfigurationDictionaryObjectTypeValueItem) ? get_class($userConfigurationDictionaryObjectTypeValueItem) : gettype($userConfigurationDictionaryObjectTypeValueItem)), __LINE__);
            }
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function addToValue($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Value[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserConfigurationDictionaryObjectType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
