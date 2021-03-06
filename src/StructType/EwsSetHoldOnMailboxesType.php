<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetHoldOnMailboxesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type for the SetHoldOnMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetHoldOnMailboxesType extends EwsBaseRequestType
{
    /**
     * The ActionType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ActionType;
    /**
     * The HoldId
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $HoldId;
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $Query;
    /**
     * The Mailboxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Mailboxes;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Language;
    /**
     * The IncludeNonIndexableItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeNonIndexableItems;
    /**
     * The Deduplication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Deduplication;
    /**
     * The InPlaceHoldIdentity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InPlaceHoldIdentity;
    /**
     * The ItemHoldPeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemHoldPeriod;
    /**
     * Constructor method for SetHoldOnMailboxesType
     * @uses EwsSetHoldOnMailboxesType::setActionType()
     * @uses EwsSetHoldOnMailboxesType::setHoldId()
     * @uses EwsSetHoldOnMailboxesType::setQuery()
     * @uses EwsSetHoldOnMailboxesType::setMailboxes()
     * @uses EwsSetHoldOnMailboxesType::setLanguage()
     * @uses EwsSetHoldOnMailboxesType::setIncludeNonIndexableItems()
     * @uses EwsSetHoldOnMailboxesType::setDeduplication()
     * @uses EwsSetHoldOnMailboxesType::setInPlaceHoldIdentity()
     * @uses EwsSetHoldOnMailboxesType::setItemHoldPeriod()
     * @param string $actionType
     * @param string $holdId
     * @param string $query
     * @param \Ews\ArrayType\EwsArrayOfStringsType $mailboxes
     * @param string $language
     * @param bool $includeNonIndexableItems
     * @param bool $deduplication
     * @param string $inPlaceHoldIdentity
     * @param string $itemHoldPeriod
     */
    public function __construct($actionType = null, $holdId = null, $query = null, \Ews\ArrayType\EwsArrayOfStringsType $mailboxes = null, $language = null, $includeNonIndexableItems = null, $deduplication = null, $inPlaceHoldIdentity = null, $itemHoldPeriod = null)
    {
        $this
            ->setActionType($actionType)
            ->setHoldId($holdId)
            ->setQuery($query)
            ->setMailboxes($mailboxes)
            ->setLanguage($language)
            ->setIncludeNonIndexableItems($includeNonIndexableItems)
            ->setDeduplication($deduplication)
            ->setInPlaceHoldIdentity($inPlaceHoldIdentity)
            ->setItemHoldPeriod($itemHoldPeriod);
    }
    /**
     * Get ActionType value
     * @return string
     */
    public function getActionType()
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @uses \Ews\EnumType\EwsHoldActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsHoldActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actionType
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setActionType($actionType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsHoldActionType::valueIsValid($actionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actionType, implode(', ', \Ews\EnumType\EwsHoldActionType::getValidValues())), __LINE__);
        }
        $this->ActionType = $actionType;
        return $this;
    }
    /**
     * Get HoldId value
     * @return string
     */
    public function getHoldId()
    {
        return $this->HoldId;
    }
    /**
     * Set HoldId value
     * @param string $holdId
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setHoldId($holdId = null)
    {
        // validation for constraint: string
        if (!is_null($holdId) && !is_string($holdId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holdId)), __LINE__);
        }
        $this->HoldId = $holdId;
        return $this;
    }
    /**
     * Get Query value
     * @return string
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($query)), __LINE__);
        }
        $this->Query = $query;
        return $this;
    }
    /**
     * Get Mailboxes value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getMailboxes()
    {
        return $this->Mailboxes;
    }
    /**
     * Set Mailboxes value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $mailboxes
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setMailboxes(\Ews\ArrayType\EwsArrayOfStringsType $mailboxes = null)
    {
        $this->Mailboxes = $mailboxes;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get IncludeNonIndexableItems value
     * @return bool|null
     */
    public function getIncludeNonIndexableItems()
    {
        return $this->IncludeNonIndexableItems;
    }
    /**
     * Set IncludeNonIndexableItems value
     * @param bool $includeNonIndexableItems
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setIncludeNonIndexableItems($includeNonIndexableItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeNonIndexableItems) && !is_bool($includeNonIndexableItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeNonIndexableItems)), __LINE__);
        }
        $this->IncludeNonIndexableItems = $includeNonIndexableItems;
        return $this;
    }
    /**
     * Get Deduplication value
     * @return bool|null
     */
    public function getDeduplication()
    {
        return $this->Deduplication;
    }
    /**
     * Set Deduplication value
     * @param bool $deduplication
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setDeduplication($deduplication = null)
    {
        // validation for constraint: boolean
        if (!is_null($deduplication) && !is_bool($deduplication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deduplication)), __LINE__);
        }
        $this->Deduplication = $deduplication;
        return $this;
    }
    /**
     * Get InPlaceHoldIdentity value
     * @return string|null
     */
    public function getInPlaceHoldIdentity()
    {
        return $this->InPlaceHoldIdentity;
    }
    /**
     * Set InPlaceHoldIdentity value
     * @param string $inPlaceHoldIdentity
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setInPlaceHoldIdentity($inPlaceHoldIdentity = null)
    {
        // validation for constraint: string
        if (!is_null($inPlaceHoldIdentity) && !is_string($inPlaceHoldIdentity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inPlaceHoldIdentity)), __LINE__);
        }
        $this->InPlaceHoldIdentity = $inPlaceHoldIdentity;
        return $this;
    }
    /**
     * Get ItemHoldPeriod value
     * @return string|null
     */
    public function getItemHoldPeriod()
    {
        return $this->ItemHoldPeriod;
    }
    /**
     * Set ItemHoldPeriod value
     * @param string $itemHoldPeriod
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
     */
    public function setItemHoldPeriod($itemHoldPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($itemHoldPeriod) && !is_string($itemHoldPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemHoldPeriod)), __LINE__);
        }
        $this->ItemHoldPeriod = $itemHoldPeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetHoldOnMailboxesType
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
