<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeDescriptionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsChangeDescriptionType extends AbstractStructBase
{
    /**
     * The FieldURI
     * @var \Ews\StructType\EwsPathToUnindexedFieldType
     */
    public $FieldURI;
    /**
     * The IndexedFieldURI
     * @var \Ews\StructType\EwsPathToIndexedFieldType
     */
    public $IndexedFieldURI;
    /**
     * The ExtendedFieldURI
     * @var \Ews\StructType\EwsPathToExtendedFieldType
     */
    public $ExtendedFieldURI;
    /**
     * Constructor method for ChangeDescriptionType
     * @uses EwsChangeDescriptionType::setFieldURI()
     * @uses EwsChangeDescriptionType::setIndexedFieldURI()
     * @uses EwsChangeDescriptionType::setExtendedFieldURI()
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(\Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null, \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI);
    }
    /**
     * Get FieldURI value
     * @return \Ews\StructType\EwsPathToUnindexedFieldType|null
     */
    public function getFieldURI()
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @return \Ews\StructType\EwsChangeDescriptionType
     */
    public function setFieldURI(\Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null)
    {
        $this->FieldURI = $fieldURI;
        return $this;
    }
    /**
     * Get IndexedFieldURI value
     * @return \Ews\StructType\EwsPathToIndexedFieldType|null
     */
    public function getIndexedFieldURI()
    {
        return $this->IndexedFieldURI;
    }
    /**
     * Set IndexedFieldURI value
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @return \Ews\StructType\EwsChangeDescriptionType
     */
    public function setIndexedFieldURI(\Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null)
    {
        $this->IndexedFieldURI = $indexedFieldURI;
        return $this;
    }
    /**
     * Get ExtendedFieldURI value
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedFieldURI()
    {
        return $this->ExtendedFieldURI;
    }
    /**
     * Set ExtendedFieldURI value
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @return \Ews\StructType\EwsChangeDescriptionType
     */
    public function setExtendedFieldURI(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsChangeDescriptionType
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
