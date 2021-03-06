<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEncryptedSharedFolderDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEncryptedSharedFolderDataType extends AbstractStructArrayBase
{
    /**
     * The EncryptedSharedFolderData
     * @var \Ews\StructType\EwsEncryptedSharedFolderDataType
     */
    public $EncryptedSharedFolderData;
    /**
     * Constructor method for ArrayOfEncryptedSharedFolderDataType
     * @uses EwsArrayOfEncryptedSharedFolderDataType::setEncryptedSharedFolderData()
     * @param \Ews\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData
     */
    public function __construct(\Ews\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData = null)
    {
        $this
            ->setEncryptedSharedFolderData($encryptedSharedFolderData);
    }
    /**
     * Get EncryptedSharedFolderData value
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function getEncryptedSharedFolderData()
    {
        return $this->EncryptedSharedFolderData;
    }
    /**
     * Set EncryptedSharedFolderData value
     * @param \Ews\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData
     * @return \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType
     */
    public function setEncryptedSharedFolderData(\Ews\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData = null)
    {
        $this->EncryptedSharedFolderData = $encryptedSharedFolderData;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EncryptedSharedFolderData
     */
    public function getAttributeName()
    {
        return 'EncryptedSharedFolderData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType
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
