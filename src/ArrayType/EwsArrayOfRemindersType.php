<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRemindersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRemindersType extends AbstractStructArrayBase
{
    /**
     * The Reminder
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $Reminder;
    /**
     * Constructor method for ArrayOfRemindersType
     * @uses EwsArrayOfRemindersType::setReminder()
     * @param array $reminder
     */
    public function __construct(array $reminder = array())
    {
        $this
            ->setReminder($reminder);
    }
    /**
     * Get Reminder value
     * @return array
     */
    public function getReminder()
    {
        return $this->Reminder;
    }
    /**
     * Set Reminder value
     * @param array $reminder
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
     */
    public function setReminder(array $reminder = array())
    {
        $this->Reminder = $reminder;
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
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @uses \Ews\EnumType\EwsReminderType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfRemindersType|bool
     */
    public function add($item)
    {
        return \Ews\EnumType\EwsReminderType::valueIsValid($item) ? parent::add($item) : false;
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Reminder
     */
    public function getAttributeName()
    {
        return 'Reminder';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
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
