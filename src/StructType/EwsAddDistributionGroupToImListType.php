<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDistributionGroupToImListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddDistributionGroupToImListType extends EwsBaseRequestType
{
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $SmtpAddress;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $DisplayName;
    /**
     * Constructor method for AddDistributionGroupToImListType
     * @uses EwsAddDistributionGroupToImListType::setSmtpAddress()
     * @uses EwsAddDistributionGroupToImListType::setDisplayName()
     * @param string $smtpAddress
     * @param string $displayName
     */
    public function __construct($smtpAddress = null, $displayName = null)
    {
        $this
            ->setSmtpAddress($smtpAddress)
            ->setDisplayName($displayName);
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsAddDistributionGroupToImListType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($smtpAddress) && strlen($smtpAddress) < 1) || (is_array($smtpAddress) && count($smtpAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsAddDistributionGroupToImListType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($displayName) && strlen($displayName) < 1) || (is_array($displayName) && count($displayName) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddDistributionGroupToImListType
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
