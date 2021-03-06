<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfDLExpansionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDLExpansionType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType[]
     */
    public $Mailbox;
    /**
     * The IndexedPagingOffset
     * @var int
     */
    public $IndexedPagingOffset;
    /**
     * The NumeratorOffset
     * @var int
     */
    public $NumeratorOffset;
    /**
     * The AbsoluteDenominator
     * @var int
     */
    public $AbsoluteDenominator;
    /**
     * The IncludesLastItemInRange
     * @var bool
     */
    public $IncludesLastItemInRange;
    /**
     * The TotalItemsInView
     * @var int
     */
    public $TotalItemsInView;
    /**
     * Constructor method for ArrayOfDLExpansionType
     * @uses EwsArrayOfDLExpansionType::setMailbox()
     * @uses EwsArrayOfDLExpansionType::setIndexedPagingOffset()
     * @uses EwsArrayOfDLExpansionType::setNumeratorOffset()
     * @uses EwsArrayOfDLExpansionType::setAbsoluteDenominator()
     * @uses EwsArrayOfDLExpansionType::setIncludesLastItemInRange()
     * @uses EwsArrayOfDLExpansionType::setTotalItemsInView()
     * @param \Ews\StructType\EwsEmailAddressType[] $mailbox
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(array $mailbox = array(), $indexedPagingOffset = null, $numeratorOffset = null, $absoluteDenominator = null, $includesLastItemInRange = null, $totalItemsInView = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsEmailAddressType[]|null
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressType[] $mailbox
     * @return \Ews\StructType\EwsArrayOfDLExpansionType
     */
    public function setMailbox(array $mailbox = array())
    {
        foreach ($mailbox as $arrayOfDLExpansionTypeMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfDLExpansionTypeMailboxItem instanceof \Ews\StructType\EwsEmailAddressType) {
                throw new \InvalidArgumentException(sprintf('The Mailbox property can only contain items of \Ews\StructType\EwsEmailAddressType, "%s" given', is_object($arrayOfDLExpansionTypeMailboxItem) ? get_class($arrayOfDLExpansionTypeMailboxItem) : gettype($arrayOfDLExpansionTypeMailboxItem)), __LINE__);
            }
        }
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Add item to Mailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressType $item
     * @return \Ews\StructType\EwsArrayOfDLExpansionType
     */
    public function addToMailbox(\Ews\StructType\EwsEmailAddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsEmailAddressType) {
            throw new \InvalidArgumentException(sprintf('The Mailbox property can only contain items of \Ews\StructType\EwsEmailAddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Mailbox[] = $item;
        return $this;
    }
    /**
     * Get IndexedPagingOffset value
     * @return int|null
     */
    public function getIndexedPagingOffset()
    {
        return $this->IndexedPagingOffset;
    }
    /**
     * Set IndexedPagingOffset value
     * @param int $indexedPagingOffset
     * @return \Ews\StructType\EwsArrayOfDLExpansionType
     */
    public function setIndexedPagingOffset($indexedPagingOffset = null)
    {
        // validation for constraint: int
        if (!is_null($indexedPagingOffset) && !is_numeric($indexedPagingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($indexedPagingOffset)), __LINE__);
        }
        $this->IndexedPagingOffset = $indexedPagingOffset;
        return $this;
    }
    /**
     * Get NumeratorOffset value
     * @return int|null
     */
    public function getNumeratorOffset()
    {
        return $this->NumeratorOffset;
    }
    /**
     * Set NumeratorOffset value
     * @param int $numeratorOffset
     * @return \Ews\StructType\EwsArrayOfDLExpansionType
     */
    public function setNumeratorOffset($numeratorOffset = null)
    {
        // validation for constraint: int
        if (!is_null($numeratorOffset) && !is_numeric($numeratorOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numeratorOffset)), __LINE__);
        }
        $this->NumeratorOffset = $numeratorOffset;
        return $this;
    }
    /**
     * Get AbsoluteDenominator value
     * @return int|null
     */
    public function getAbsoluteDenominator()
    {
        return $this->AbsoluteDenominator;
    }
    /**
     * Set AbsoluteDenominator value
     * @param int $absoluteDenominator
     * @return \Ews\StructType\EwsArrayOfDLExpansionType
     */
    public function setAbsoluteDenominator($absoluteDenominator = null)
    {
        // validation for constraint: int
        if (!is_null($absoluteDenominator) && !is_numeric($absoluteDenominator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($absoluteDenominator)), __LINE__);
        }
        $this->AbsoluteDenominator = $absoluteDenominator;
        return $this;
    }
    /**
     * Get IncludesLastItemInRange value
     * @return bool|null
     */
    public function getIncludesLastItemInRange()
    {
        return $this->IncludesLastItemInRange;
    }
    /**
     * Set IncludesLastItemInRange value
     * @param bool $includesLastItemInRange
     * @return \Ews\StructType\EwsArrayOfDLExpansionType
     */
    public function setIncludesLastItemInRange($includesLastItemInRange = null)
    {
        // validation for constraint: boolean
        if (!is_null($includesLastItemInRange) && !is_bool($includesLastItemInRange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includesLastItemInRange)), __LINE__);
        }
        $this->IncludesLastItemInRange = $includesLastItemInRange;
        return $this;
    }
    /**
     * Get TotalItemsInView value
     * @return int|null
     */
    public function getTotalItemsInView()
    {
        return $this->TotalItemsInView;
    }
    /**
     * Set TotalItemsInView value
     * @param int $totalItemsInView
     * @return \Ews\StructType\EwsArrayOfDLExpansionType
     */
    public function setTotalItemsInView($totalItemsInView = null)
    {
        // validation for constraint: int
        if (!is_null($totalItemsInView) && !is_numeric($totalItemsInView)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalItemsInView)), __LINE__);
        }
        $this->TotalItemsInView = $totalItemsInView;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsArrayOfDLExpansionType
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
