<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAppManifestsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAppManifestsType extends AbstractStructArrayBase
{
    /**
     * The Manifest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Manifest;
    /**
     * Constructor method for ArrayOfAppManifestsType
     * @uses EwsArrayOfAppManifestsType::setManifest()
     * @param string[] $manifest
     */
    public function __construct(array $manifest = array())
    {
        $this
            ->setManifest($manifest);
    }
    /**
     * Get Manifest value
     * @return string[]|null
     */
    public function getManifest()
    {
        return $this->Manifest;
    }
    /**
     * Set Manifest value
     * @throws \InvalidArgumentException
     * @param string[] $manifest
     * @return \Ews\ArrayType\EwsArrayOfAppManifestsType
     */
    public function setManifest(array $manifest = array())
    {
        foreach ($manifest as $arrayOfAppManifestsTypeManifestItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfAppManifestsTypeManifestItem)) {
                throw new \InvalidArgumentException(sprintf('The Manifest property can only contain items of base64Binary, "%s" given', is_object($arrayOfAppManifestsTypeManifestItem) ? get_class($arrayOfAppManifestsTypeManifestItem) : gettype($arrayOfAppManifestsTypeManifestItem)), __LINE__);
            }
        }
        $this->Manifest = $manifest;
        return $this;
    }
    /**
     * Add item to Manifest value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfAppManifestsType
     */
    public function addToManifest($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Manifest property can only contain items of base64Binary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Manifest[] = $item;
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
     * @return string Manifest
     */
    public function getAttributeName()
    {
        return 'Manifest';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfAppManifestsType
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
