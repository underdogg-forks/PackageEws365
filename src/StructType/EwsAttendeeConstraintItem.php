<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttendeeConstraintItem StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttendeeConstraintItem extends EwsMeetingTimeCandidatesConstraintItem
{
    /**
     * The IsRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRequired;
    /**
     * Constructor method for AttendeeConstraintItem
     * @uses EwsAttendeeConstraintItem::setIsRequired()
     * @param bool $isRequired
     */
    public function __construct($isRequired = null)
    {
        $this
            ->setIsRequired($isRequired);
    }
    /**
     * Get IsRequired value
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->IsRequired;
    }
    /**
     * Set IsRequired value
     * @param bool $isRequired
     * @return \Ews\StructType\EwsAttendeeConstraintItem
     */
    public function setIsRequired($isRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRequired) && !is_bool($isRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRequired)), __LINE__);
        }
        $this->IsRequired = $isRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAttendeeConstraintItem
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
