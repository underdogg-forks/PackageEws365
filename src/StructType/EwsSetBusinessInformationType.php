<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBusinessInformationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetBusinessInformationType extends EwsBaseBookingRequestType
{
    /**
     * The BusinessInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsBusinessInfoType
     */
    public $BusinessInfo;
    /**
     * Constructor method for SetBusinessInformationType
     * @uses EwsSetBusinessInformationType::setBusinessInfo()
     * @param \Ews\StructType\EwsBusinessInfoType $businessInfo
     */
    public function __construct(\Ews\StructType\EwsBusinessInfoType $businessInfo = null)
    {
        $this
            ->setBusinessInfo($businessInfo);
    }
    /**
     * Get BusinessInfo value
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function getBusinessInfo()
    {
        return $this->BusinessInfo;
    }
    /**
     * Set BusinessInfo value
     * @param \Ews\StructType\EwsBusinessInfoType $businessInfo
     * @return \Ews\StructType\EwsSetBusinessInformationType
     */
    public function setBusinessInfo(\Ews\StructType\EwsBusinessInfoType $businessInfo = null)
    {
        $this->BusinessInfo = $businessInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetBusinessInformationType
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
