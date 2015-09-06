<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XrmActivityStreamType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmActivityStreamType extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The ClientSessionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClientSessionId;
    /**
     * The EventTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $EventTime;
    /**
     * The SourceUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $SourceUser;
    /**
     * The ActionVerb
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ActionVerb;
    /**
     * The Subtype
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subtype;
    /**
     * The TargetEntities
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $TargetEntities;
    /**
     * The OtherRelatedEntities
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $OtherRelatedEntities;
    /**
     * The Flags
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Flags;
    /**
     * The ModifiedProperties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModifiedProperties;
    /**
     * The AdditionalActivityDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalActivityDetails;
    /**
     * Constructor method for XrmActivityStreamType
     * @uses EwsXrmActivityStreamType::setId()
     * @uses EwsXrmActivityStreamType::setClientSessionId()
     * @uses EwsXrmActivityStreamType::setEventTime()
     * @uses EwsXrmActivityStreamType::setSourceUser()
     * @uses EwsXrmActivityStreamType::setActionVerb()
     * @uses EwsXrmActivityStreamType::setSubtype()
     * @uses EwsXrmActivityStreamType::setTargetEntities()
     * @uses EwsXrmActivityStreamType::setOtherRelatedEntities()
     * @uses EwsXrmActivityStreamType::setFlags()
     * @uses EwsXrmActivityStreamType::setModifiedProperties()
     * @uses EwsXrmActivityStreamType::setAdditionalActivityDetails()
     * @param string $id
     * @param string $clientSessionId
     * @param dateTime $eventTime
     * @param base64Binary $sourceUser
     * @param string $actionVerb
     * @param string $subtype
     * @param \Ews\ArrayType\EwsArrayOfStringsType $targetEntities
     * @param \Ews\ArrayType\EwsArrayOfStringsType $otherRelatedEntities
     * @param string $flags
     * @param string $modifiedProperties
     * @param string $additionalActivityDetails
     */
    public function __construct($id = null, $clientSessionId = null, $eventTime = null, base64Binary $sourceUser = null, $actionVerb = null, $subtype = null, \Ews\ArrayType\EwsArrayOfStringsType $targetEntities = null, \Ews\ArrayType\EwsArrayOfStringsType $otherRelatedEntities = null, $flags = null, $modifiedProperties = null, $additionalActivityDetails = null)
    {
        $this
            ->setId($id)
            ->setClientSessionId($clientSessionId)
            ->setEventTime($eventTime)
            ->setSourceUser($sourceUser)
            ->setActionVerb($actionVerb)
            ->setSubtype($subtype)
            ->setTargetEntities($targetEntities)
            ->setOtherRelatedEntities($otherRelatedEntities)
            ->setFlags($flags)
            ->setModifiedProperties($modifiedProperties)
            ->setAdditionalActivityDetails($additionalActivityDetails);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get ClientSessionId value
     * @return string|null
     */
    public function getClientSessionId()
    {
        return $this->ClientSessionId;
    }
    /**
     * Set ClientSessionId value
     * @param string $clientSessionId
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setClientSessionId($clientSessionId = null)
    {
        $this->ClientSessionId = $clientSessionId;
        return $this;
    }
    /**
     * Get EventTime value
     * @return dateTime|null
     */
    public function getEventTime()
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param dateTime $eventTime
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setEventTime($eventTime = null)
    {
        $this->EventTime = $eventTime;
        return $this;
    }
    /**
     * Get SourceUser value
     * @return base64Binary|null
     */
    public function getSourceUser()
    {
        return $this->SourceUser;
    }
    /**
     * Set SourceUser value
     * @param base64Binary $sourceUser
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setSourceUser(base64Binary $sourceUser = null)
    {
        $this->SourceUser = $sourceUser;
        return $this;
    }
    /**
     * Get ActionVerb value
     * @return string|null
     */
    public function getActionVerb()
    {
        return $this->ActionVerb;
    }
    /**
     * Set ActionVerb value
     * @param string $actionVerb
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setActionVerb($actionVerb = null)
    {
        $this->ActionVerb = $actionVerb;
        return $this;
    }
    /**
     * Get Subtype value
     * @return string|null
     */
    public function getSubtype()
    {
        return $this->Subtype;
    }
    /**
     * Set Subtype value
     * @param string $subtype
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setSubtype($subtype = null)
    {
        $this->Subtype = $subtype;
        return $this;
    }
    /**
     * Get TargetEntities value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getTargetEntities()
    {
        return $this->TargetEntities;
    }
    /**
     * Set TargetEntities value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $targetEntities
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setTargetEntities(\Ews\ArrayType\EwsArrayOfStringsType $targetEntities = null)
    {
        $this->TargetEntities = $targetEntities;
        return $this;
    }
    /**
     * Get OtherRelatedEntities value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getOtherRelatedEntities()
    {
        return $this->OtherRelatedEntities;
    }
    /**
     * Set OtherRelatedEntities value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $otherRelatedEntities
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setOtherRelatedEntities(\Ews\ArrayType\EwsArrayOfStringsType $otherRelatedEntities = null)
    {
        $this->OtherRelatedEntities = $otherRelatedEntities;
        return $this;
    }
    /**
     * Get Flags value
     * @return string|null
     */
    public function getFlags()
    {
        return $this->Flags;
    }
    /**
     * Set Flags value
     * @uses \Ews\EnumType\EwsXrmActivityStreamFlagsType::valueIsValid()
     * @uses \Ews\EnumType\EwsXrmActivityStreamFlagsType::getValidValues()
     * @param string $flags
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setFlags($flags = null)
    {
        if (!\Ews\EnumType\EwsXrmActivityStreamFlagsType::valueIsValid($flags)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flags, implode(', ', \Ews\EnumType\EwsXrmActivityStreamFlagsType::getValidValues())), __LINE__);
        }
        $this->Flags = $flags;
        return $this;
    }
    /**
     * Get ModifiedProperties value
     * @return string|null
     */
    public function getModifiedProperties()
    {
        return $this->ModifiedProperties;
    }
    /**
     * Set ModifiedProperties value
     * @param string $modifiedProperties
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setModifiedProperties($modifiedProperties = null)
    {
        $this->ModifiedProperties = $modifiedProperties;
        return $this;
    }
    /**
     * Get AdditionalActivityDetails value
     * @return string|null
     */
    public function getAdditionalActivityDetails()
    {
        return $this->AdditionalActivityDetails;
    }
    /**
     * Set AdditionalActivityDetails value
     * @param string $additionalActivityDetails
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setAdditionalActivityDetails($additionalActivityDetails = null)
    {
        $this->AdditionalActivityDetails = $additionalActivityDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsXrmActivityStreamType
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
