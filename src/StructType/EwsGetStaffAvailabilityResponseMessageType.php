<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStaffAvailabilityResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetStaffAvailabilityResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Responses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public $Responses;
    /**
     * Constructor method for GetStaffAvailabilityResponseMessageType
     * @uses EwsGetStaffAvailabilityResponseMessageType::setResponses()
     * @param \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses = null)
    {
        $this
            ->setResponses($responses);
    }
    /**
     * Get Responses value
     * @return \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function getResponses()
    {
        return $this->Responses;
    }
    /**
     * Set Responses value
     * @param \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses
     * @return \Ews\StructType\EwsGetStaffAvailabilityResponseMessageType
     */
    public function setResponses(\Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses = null)
    {
        $this->Responses = $responses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetStaffAvailabilityResponseMessageType
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
