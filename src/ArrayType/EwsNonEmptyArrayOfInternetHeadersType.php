<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfInternetHeadersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfInternetHeadersType extends AbstractStructArrayBase
{
    /**
     * The InternetMessageHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsInternetHeaderType[]
     */
    public $InternetMessageHeader;
    /**
     * Constructor method for NonEmptyArrayOfInternetHeadersType
     * @uses EwsNonEmptyArrayOfInternetHeadersType::setInternetMessageHeader()
     * @param \Ews\StructType\EwsInternetHeaderType[] $internetMessageHeader
     */
    public function __construct(array $internetMessageHeader = array())
    {
        $this
            ->setInternetMessageHeader($internetMessageHeader);
    }
    /**
     * Get InternetMessageHeader value
     * @return \Ews\StructType\EwsInternetHeaderType[]|null
     */
    public function getInternetMessageHeader()
    {
        return $this->InternetMessageHeader;
    }
    /**
     * Set InternetMessageHeader value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInternetHeaderType[] $internetMessageHeader
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     */
    public function setInternetMessageHeader(array $internetMessageHeader = array())
    {
        foreach ($internetMessageHeader as $nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem instanceof \Ews\StructType\EwsInternetHeaderType) {
                throw new \InvalidArgumentException(sprintf('The InternetMessageHeader property can only contain items of \Ews\StructType\EwsInternetHeaderType, "%s" given', is_object($nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem) ? get_class($nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem) : gettype($nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem)), __LINE__);
            }
        }
        $this->InternetMessageHeader = $internetMessageHeader;
        return $this;
    }
    /**
     * Add item to InternetMessageHeader value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInternetHeaderType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     */
    public function addToInternetMessageHeader(\Ews\StructType\EwsInternetHeaderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsInternetHeaderType) {
            throw new \InvalidArgumentException(sprintf('The InternetMessageHeader property can only contain items of \Ews\StructType\EwsInternetHeaderType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InternetMessageHeader[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsInternetHeaderType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsInternetHeaderType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsInternetHeaderType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsInternetHeaderType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsInternetHeaderType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InternetMessageHeader
     */
    public function getAttributeName()
    {
        return 'InternetMessageHeader';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
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
