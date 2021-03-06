<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivateSharingInvitationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsActivateSharingInvitationType extends EwsBaseSharingInvitationRequestType
{
    /**
     * The EmailAddressInInvitation
     * Meta informations extracted from the WSDL
     * - use: required
     * - minLength: 1
     * @var string
     */
    public $EmailAddressInInvitation;
    /**
     * Constructor method for ActivateSharingInvitationType
     * @uses EwsActivateSharingInvitationType::setEmailAddressInInvitation()
     * @param string $emailAddressInInvitation
     */
    public function __construct($emailAddressInInvitation = null)
    {
        $this
            ->setEmailAddressInInvitation($emailAddressInInvitation);
    }
    /**
     * Get EmailAddressInInvitation value
     * @return string
     */
    public function getEmailAddressInInvitation()
    {
        return $this->EmailAddressInInvitation;
    }
    /**
     * Set EmailAddressInInvitation value
     * @param string $emailAddressInInvitation
     * @return \Ews\StructType\EwsActivateSharingInvitationType
     */
    public function setEmailAddressInInvitation($emailAddressInInvitation = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($emailAddressInInvitation) && strlen($emailAddressInInvitation) < 1) || (is_array($emailAddressInInvitation) && count($emailAddressInInvitation) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($emailAddressInInvitation) && !is_string($emailAddressInInvitation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddressInInvitation)), __LINE__);
        }
        $this->EmailAddressInInvitation = $emailAddressInInvitation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsActivateSharingInvitationType
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
