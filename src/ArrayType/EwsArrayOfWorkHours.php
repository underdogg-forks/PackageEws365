<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkHours ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfWorkHours extends AbstractStructArrayBase
{
    /**
     * The WorkHours
     * Meta informations extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 0
     * @var \Ews\StructType\EwsWorkHoursType[]
     */
    public $WorkHours;
    /**
     * Constructor method for ArrayOfWorkHours
     * @uses EwsArrayOfWorkHours::setWorkHours()
     * @param \Ews\StructType\EwsWorkHoursType[] $workHours
     */
    public function __construct(array $workHours = array())
    {
        $this
            ->setWorkHours($workHours);
    }
    /**
     * Get WorkHours value
     * @return \Ews\StructType\EwsWorkHoursType[]|null
     */
    public function getWorkHours()
    {
        return $this->WorkHours;
    }
    /**
     * Set WorkHours value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsWorkHoursType[] $workHours
     * @return \Ews\ArrayType\EwsArrayOfWorkHours
     */
    public function setWorkHours(array $workHours = array())
    {
        foreach ($workHours as $arrayOfWorkHoursWorkHoursItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkHoursWorkHoursItem instanceof \Ews\StructType\EwsWorkHoursType) {
                throw new \InvalidArgumentException(sprintf('The WorkHours property can only contain items of \Ews\StructType\EwsWorkHoursType, "%s" given', is_object($arrayOfWorkHoursWorkHoursItem) ? get_class($arrayOfWorkHoursWorkHoursItem) : gettype($arrayOfWorkHoursWorkHoursItem)), __LINE__);
            }
        }
        $this->WorkHours = $workHours;
        return $this;
    }
    /**
     * Add item to WorkHours value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsWorkHoursType $item
     * @return \Ews\ArrayType\EwsArrayOfWorkHours
     */
    public function addToWorkHours(\Ews\StructType\EwsWorkHoursType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsWorkHoursType) {
            throw new \InvalidArgumentException(sprintf('The WorkHours property can only contain items of \Ews\StructType\EwsWorkHoursType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WorkHours[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsWorkHoursType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkHours
     */
    public function getAttributeName()
    {
        return 'WorkHours';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfWorkHours
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
