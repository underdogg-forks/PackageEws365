<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupDetailsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupDetailsType extends EwsUnifiedGroupBaseType
{
    /**
     * The UserGroupRelationship
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserUnifiedGroupRelationshipType
     */
    public $UserGroupRelationship;
    /**
     * The GroupResources
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType
     */
    public $GroupResources;
    /**
     * The MailboxSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUnifiedGroupMailboxSettingsType
     */
    public $MailboxSettings;
    /**
     * The OwnerCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $OwnerCount;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ExternalDirectoryObjectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalDirectoryObjectId;
    /**
     * Constructor method for UnifiedGroupDetailsType
     * @uses EwsUnifiedGroupDetailsType::setUserGroupRelationship()
     * @uses EwsUnifiedGroupDetailsType::setGroupResources()
     * @uses EwsUnifiedGroupDetailsType::setMailboxSettings()
     * @uses EwsUnifiedGroupDetailsType::setOwnerCount()
     * @uses EwsUnifiedGroupDetailsType::setDescription()
     * @uses EwsUnifiedGroupDetailsType::setExternalDirectoryObjectId()
     * @param \Ews\StructType\EwsUserUnifiedGroupRelationshipType $userGroupRelationship
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType $groupResources
     * @param \Ews\StructType\EwsUnifiedGroupMailboxSettingsType $mailboxSettings
     * @param int $ownerCount
     * @param string $description
     * @param string $externalDirectoryObjectId
     */
    public function __construct(\Ews\StructType\EwsUserUnifiedGroupRelationshipType $userGroupRelationship = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType $groupResources = null, \Ews\StructType\EwsUnifiedGroupMailboxSettingsType $mailboxSettings = null, $ownerCount = null, $description = null, $externalDirectoryObjectId = null)
    {
        $this
            ->setUserGroupRelationship($userGroupRelationship)
            ->setGroupResources($groupResources)
            ->setMailboxSettings($mailboxSettings)
            ->setOwnerCount($ownerCount)
            ->setDescription($description)
            ->setExternalDirectoryObjectId($externalDirectoryObjectId);
    }
    /**
     * Get UserGroupRelationship value
     * @return \Ews\StructType\EwsUserUnifiedGroupRelationshipType
     */
    public function getUserGroupRelationship()
    {
        return $this->UserGroupRelationship;
    }
    /**
     * Set UserGroupRelationship value
     * @param \Ews\StructType\EwsUserUnifiedGroupRelationshipType $userGroupRelationship
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public function setUserGroupRelationship(\Ews\StructType\EwsUserUnifiedGroupRelationshipType $userGroupRelationship = null)
    {
        $this->UserGroupRelationship = $userGroupRelationship;
        return $this;
    }
    /**
     * Get GroupResources value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType|null
     */
    public function getGroupResources()
    {
        return $this->GroupResources;
    }
    /**
     * Set GroupResources value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType $groupResources
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public function setGroupResources(\Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType $groupResources = null)
    {
        $this->GroupResources = $groupResources;
        return $this;
    }
    /**
     * Get MailboxSettings value
     * @return \Ews\StructType\EwsUnifiedGroupMailboxSettingsType|null
     */
    public function getMailboxSettings()
    {
        return $this->MailboxSettings;
    }
    /**
     * Set MailboxSettings value
     * @param \Ews\StructType\EwsUnifiedGroupMailboxSettingsType $mailboxSettings
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public function setMailboxSettings(\Ews\StructType\EwsUnifiedGroupMailboxSettingsType $mailboxSettings = null)
    {
        $this->MailboxSettings = $mailboxSettings;
        return $this;
    }
    /**
     * Get OwnerCount value
     * @return int|null
     */
    public function getOwnerCount()
    {
        return $this->OwnerCount;
    }
    /**
     * Set OwnerCount value
     * @param int $ownerCount
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public function setOwnerCount($ownerCount = null)
    {
        // validation for constraint: int
        if (!is_null($ownerCount) && !is_numeric($ownerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ownerCount)), __LINE__);
        }
        $this->OwnerCount = $ownerCount;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId()
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public function setExternalDirectoryObjectId($externalDirectoryObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($externalDirectoryObjectId) && !is_string($externalDirectoryObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalDirectoryObjectId)), __LINE__);
        }
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
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
