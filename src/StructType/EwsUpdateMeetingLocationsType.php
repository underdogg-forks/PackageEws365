<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMeetingLocationsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateMeetingLocationsType extends EwsBaseRequestType
{
    /**
     * The MeetingLocations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public $MeetingLocations;
    /**
     * Constructor method for UpdateMeetingLocationsType
     * @uses EwsUpdateMeetingLocationsType::setMeetingLocations()
     * @param \Ews\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations = null)
    {
        $this
            ->setMeetingLocations($meetingLocations);
    }
    /**
     * Get MeetingLocations value
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public function getMeetingLocations()
    {
        return $this->MeetingLocations;
    }
    /**
     * Set MeetingLocations value
     * @param \Ews\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations
     * @return \Ews\StructType\EwsUpdateMeetingLocationsType
     */
    public function setMeetingLocations(\Ews\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations = null)
    {
        $this->MeetingLocations = $meetingLocations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateMeetingLocationsType
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
