<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveImContactFromGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRemoveImContactFromGroupType extends EwsBaseRequestType
{
    /**
     * The ContactId
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ContactId;
    /**
     * The GroupId
     * @var \Ews\StructType\EwsItemIdType
     */
    public $GroupId;
    /**
     * Constructor method for RemoveImContactFromGroupType
     * @uses EwsRemoveImContactFromGroupType::setContactId()
     * @uses EwsRemoveImContactFromGroupType::setGroupId()
     * @param \Ews\StructType\EwsItemIdType $contactId
     * @param \Ews\StructType\EwsItemIdType $groupId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $contactId = null, \Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this
            ->setContactId($contactId)
            ->setGroupId($groupId);
    }
    /**
     * Get ContactId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getContactId()
    {
        return $this->ContactId;
    }
    /**
     * Set ContactId value
     * @param \Ews\StructType\EwsItemIdType $contactId
     * @return \Ews\StructType\EwsRemoveImContactFromGroupType
     */
    public function setContactId(\Ews\StructType\EwsItemIdType $contactId = null)
    {
        $this->ContactId = $contactId;
        return $this;
    }
    /**
     * Get GroupId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \Ews\StructType\EwsItemIdType $groupId
     * @return \Ews\StructType\EwsRemoveImContactFromGroupType
     */
    public function setGroupId(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this->GroupId = $groupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRemoveImContactFromGroupType
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
