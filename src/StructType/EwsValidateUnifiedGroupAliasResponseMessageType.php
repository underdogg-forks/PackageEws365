<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUnifiedGroupAliasResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsValidateUnifiedGroupAliasResponseMessageType extends EwsResponseMessageType
{
    /**
     * The IsAliasUnique
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsAliasUnique;
    /**
     * The Alias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * Constructor method for ValidateUnifiedGroupAliasResponseMessageType
     * @uses EwsValidateUnifiedGroupAliasResponseMessageType::setIsAliasUnique()
     * @uses EwsValidateUnifiedGroupAliasResponseMessageType::setAlias()
     * @uses EwsValidateUnifiedGroupAliasResponseMessageType::setSmtpAddress()
     * @param bool $isAliasUnique
     * @param string $alias
     * @param string $smtpAddress
     */
    public function __construct($isAliasUnique = null, $alias = null, $smtpAddress = null)
    {
        $this
            ->setIsAliasUnique($isAliasUnique)
            ->setAlias($alias)
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get IsAliasUnique value
     * @return bool|null
     */
    public function getIsAliasUnique()
    {
        return $this->IsAliasUnique;
    }
    /**
     * Set IsAliasUnique value
     * @param bool $isAliasUnique
     * @return \Ews\StructType\EwsValidateUnifiedGroupAliasResponseMessageType
     */
    public function setIsAliasUnique($isAliasUnique = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAliasUnique) && !is_bool($isAliasUnique)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAliasUnique)), __LINE__);
        }
        $this->IsAliasUnique = $isAliasUnique;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \Ews\StructType\EwsValidateUnifiedGroupAliasResponseMessageType
     */
    public function setAlias($alias = null)
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        return $this;
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
     * @return \Ews\StructType\EwsValidateUnifiedGroupAliasResponseMessageType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsValidateUnifiedGroupAliasResponseMessageType
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
