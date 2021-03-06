<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnknownEntriesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnknownEntriesType extends AbstractStructArrayBase
{
    /**
     * The UnknownEntry
     * @var string
     */
    public $UnknownEntry;
    /**
     * Constructor method for ArrayOfUnknownEntriesType
     * @uses EwsArrayOfUnknownEntriesType::setUnknownEntry()
     * @param string $unknownEntry
     */
    public function __construct($unknownEntry = null)
    {
        $this
            ->setUnknownEntry($unknownEntry);
    }
    /**
     * Get UnknownEntry value
     * @return string|null
     */
    public function getUnknownEntry()
    {
        return $this->UnknownEntry;
    }
    /**
     * Set UnknownEntry value
     * @param string $unknownEntry
     * @return \Ews\ArrayType\EwsArrayOfUnknownEntriesType
     */
    public function setUnknownEntry($unknownEntry = null)
    {
        // validation for constraint: string
        if (!is_null($unknownEntry) && !is_string($unknownEntry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unknownEntry)), __LINE__);
        }
        $this->UnknownEntry = $unknownEntry;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnknownEntry
     */
    public function getAttributeName()
    {
        return 'UnknownEntry';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUnknownEntriesType
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
