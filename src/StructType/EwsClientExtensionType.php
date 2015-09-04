<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientExtensionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsClientExtensionType extends AbstractStructBase
{
    /**
     * The SpecificUsers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $SpecificUsers;
    /**
     * The Manifest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Manifest;
    /**
     * The IsAvailable
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $IsAvailable;
    /**
     * The IsMandatory
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $IsMandatory;
    /**
     * The IsEnabledByDefault
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $IsEnabledByDefault;
    /**
     * The ProvidedTo
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ProvidedTo;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The Scope
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Scope;
    /**
     * The MarketplaceAssetId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MarketplaceAssetId;
    /**
     * The MarketplaceContentMarket
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MarketplaceContentMarket;
    /**
     * The AppStatus
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AppStatus;
    /**
     * The Etoken
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Etoken;
    /**
     * Constructor method for ClientExtensionType
     * @uses EwsClientExtensionType::setSpecificUsers()
     * @uses EwsClientExtensionType::setManifest()
     * @uses EwsClientExtensionType::setIsAvailable()
     * @uses EwsClientExtensionType::setIsMandatory()
     * @uses EwsClientExtensionType::setIsEnabledByDefault()
     * @uses EwsClientExtensionType::setProvidedTo()
     * @uses EwsClientExtensionType::setType()
     * @uses EwsClientExtensionType::setScope()
     * @uses EwsClientExtensionType::setMarketplaceAssetId()
     * @uses EwsClientExtensionType::setMarketplaceContentMarket()
     * @uses EwsClientExtensionType::setAppStatus()
     * @uses EwsClientExtensionType::setEtoken()
     * @param \Ews\ArrayType\EwsArrayOfStringsType $specificUsers
     * @param base64Binary $manifest
     * @param boolean $isAvailable
     * @param boolean $isMandatory
     * @param boolean $isEnabledByDefault
     * @param string $providedTo
     * @param string $type
     * @param string $scope
     * @param string $marketplaceAssetId
     * @param string $marketplaceContentMarket
     * @param string $appStatus
     * @param string $etoken
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $specificUsers = null, base64Binary $manifest = null, $isAvailable = null, $isMandatory = null, $isEnabledByDefault = null, $providedTo = null, $type = null, $scope = null, $marketplaceAssetId = null, $marketplaceContentMarket = null, $appStatus = null, $etoken = null)
    {
        $this
            ->setSpecificUsers($specificUsers)
            ->setManifest($manifest)
            ->setIsAvailable($isAvailable)
            ->setIsMandatory($isMandatory)
            ->setIsEnabledByDefault($isEnabledByDefault)
            ->setProvidedTo($providedTo)
            ->setType($type)
            ->setScope($scope)
            ->setMarketplaceAssetId($marketplaceAssetId)
            ->setMarketplaceContentMarket($marketplaceContentMarket)
            ->setAppStatus($appStatus)
            ->setEtoken($etoken);
    }
    /**
     * Get SpecificUsers value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getSpecificUsers()
    {
        return $this->SpecificUsers;
    }
    /**
     * Set SpecificUsers value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $specificUsers
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setSpecificUsers(\Ews\ArrayType\EwsArrayOfStringsType $specificUsers = null)
    {
        $this->SpecificUsers = $specificUsers;
        return $this;
    }
    /**
     * Get Manifest value
     * @return base64Binary|null
     */
    public function getManifest()
    {
        return $this->Manifest;
    }
    /**
     * Set Manifest value
     * @param base64Binary $manifest
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setManifest(base64Binary $manifest = null)
    {
        $this->Manifest = $manifest;
        return $this;
    }
    /**
     * Get IsAvailable value
     * @return boolean|null
     */
    public function getIsAvailable()
    {
        return $this->IsAvailable;
    }
    /**
     * Set IsAvailable value
     * @param boolean $isAvailable
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setIsAvailable($isAvailable = null)
    {
        $this->IsAvailable = $isAvailable;
        return $this;
    }
    /**
     * Get IsMandatory value
     * @return boolean|null
     */
    public function getIsMandatory()
    {
        return $this->IsMandatory;
    }
    /**
     * Set IsMandatory value
     * @param boolean $isMandatory
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setIsMandatory($isMandatory = null)
    {
        $this->IsMandatory = $isMandatory;
        return $this;
    }
    /**
     * Get IsEnabledByDefault value
     * @return boolean|null
     */
    public function getIsEnabledByDefault()
    {
        return $this->IsEnabledByDefault;
    }
    /**
     * Set IsEnabledByDefault value
     * @param boolean $isEnabledByDefault
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setIsEnabledByDefault($isEnabledByDefault = null)
    {
        $this->IsEnabledByDefault = $isEnabledByDefault;
        return $this;
    }
    /**
     * Get ProvidedTo value
     * @return string|null
     */
    public function getProvidedTo()
    {
        return $this->ProvidedTo;
    }
    /**
     * Set ProvidedTo value
     * @uses \Ews\EnumType\EwsClientExtensionProvidedToType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientExtensionProvidedToType::getValidValues()
     * @param string $providedTo
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setProvidedTo($providedTo = null)
    {
        if (!\Ews\EnumType\EwsClientExtensionProvidedToType::valueIsValid($providedTo)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $providedTo, implode(', ', \Ews\EnumType\EwsClientExtensionProvidedToType::getValidValues())), __LINE__);
        }
        $this->ProvidedTo = $providedTo;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Ews\EnumType\EwsClientExtensionTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientExtensionTypeType::getValidValues()
     * @param string $type
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setType($type = null)
    {
        if (!\Ews\EnumType\EwsClientExtensionTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Ews\EnumType\EwsClientExtensionTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Scope value
     * @return string|null
     */
    public function getScope()
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @uses \Ews\EnumType\EwsClientExtensionScopeType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientExtensionScopeType::getValidValues()
     * @param string $scope
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setScope($scope = null)
    {
        if (!\Ews\EnumType\EwsClientExtensionScopeType::valueIsValid($scope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $scope, implode(', ', \Ews\EnumType\EwsClientExtensionScopeType::getValidValues())), __LINE__);
        }
        $this->Scope = $scope;
        return $this;
    }
    /**
     * Get MarketplaceAssetId value
     * @return string|null
     */
    public function getMarketplaceAssetId()
    {
        return $this->MarketplaceAssetId;
    }
    /**
     * Set MarketplaceAssetId value
     * @param string $marketplaceAssetId
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setMarketplaceAssetId($marketplaceAssetId = null)
    {
        $this->MarketplaceAssetId = $marketplaceAssetId;
        return $this;
    }
    /**
     * Get MarketplaceContentMarket value
     * @return string|null
     */
    public function getMarketplaceContentMarket()
    {
        return $this->MarketplaceContentMarket;
    }
    /**
     * Set MarketplaceContentMarket value
     * @param string $marketplaceContentMarket
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setMarketplaceContentMarket($marketplaceContentMarket = null)
    {
        $this->MarketplaceContentMarket = $marketplaceContentMarket;
        return $this;
    }
    /**
     * Get AppStatus value
     * @return string|null
     */
    public function getAppStatus()
    {
        return $this->AppStatus;
    }
    /**
     * Set AppStatus value
     * @param string $appStatus
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setAppStatus($appStatus = null)
    {
        $this->AppStatus = $appStatus;
        return $this;
    }
    /**
     * Get Etoken value
     * @return string|null
     */
    public function getEtoken()
    {
        return $this->Etoken;
    }
    /**
     * Set Etoken value
     * @param string $etoken
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setEtoken($etoken = null)
    {
        $this->Etoken = $etoken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsClientExtensionType
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