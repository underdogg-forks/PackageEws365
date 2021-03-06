<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEntityType extends AbstractStructBase
{
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Position;
    /**
     * Constructor method for EntityType
     * @uses EwsEntityType::setPosition()
     * @param string[] $position
     */
    public function __construct(array $position = array())
    {
        $this
            ->setPosition($position);
    }
    /**
     * Get Position value
     * @return string[]|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @uses \Ews\EnumType\EwsEmailPositionType::valueIsValid()
     * @uses \Ews\EnumType\EwsEmailPositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $position
     * @return \Ews\StructType\EwsEntityType
     */
    public function setPosition(array $position = array())
    {
        $invalidValues = array();
        foreach ($position as $entityTypePositionItem) {
            if (!\Ews\EnumType\EwsEmailPositionType::valueIsValid($entityTypePositionItem)) {
                $invalidValues[] = var_export($entityTypePositionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Ews\EnumType\EwsEmailPositionType::getValidValues())), __LINE__);
        }
        $this->Position = $position;
        return $this;
    }
    /**
     * Add item to Position value
     * @uses \Ews\EnumType\EwsEmailPositionType::valueIsValid()
     * @uses \Ews\EnumType\EwsEmailPositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\StructType\EwsEntityType
     */
    public function addToPosition($item)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsEmailPositionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Ews\EnumType\EwsEmailPositionType::getValidValues())), __LINE__);
        }
        $this->Position[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEntityType
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
