<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPeopleResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindPeopleResponseMessageType extends EwsResponseMessageType
{
    /**
     * The People
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPeopleType
     */
    public $People;
    /**
     * The TotalNumberOfPeopleInView
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalNumberOfPeopleInView;
    /**
     * The FirstMatchingRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FirstMatchingRowIndex;
    /**
     * The FirstLoadedRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FirstLoadedRowIndex;
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $TransactionId;
    /**
     * Constructor method for FindPeopleResponseMessageType
     * @uses EwsFindPeopleResponseMessageType::setPeople()
     * @uses EwsFindPeopleResponseMessageType::setTotalNumberOfPeopleInView()
     * @uses EwsFindPeopleResponseMessageType::setFirstMatchingRowIndex()
     * @uses EwsFindPeopleResponseMessageType::setFirstLoadedRowIndex()
     * @uses EwsFindPeopleResponseMessageType::setTransactionId()
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $people
     * @param int $totalNumberOfPeopleInView
     * @param int $firstMatchingRowIndex
     * @param int $firstLoadedRowIndex
     * @param string $transactionId
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfPeopleType $people = null, $totalNumberOfPeopleInView = null, $firstMatchingRowIndex = null, $firstLoadedRowIndex = null, $transactionId = null)
    {
        $this
            ->setPeople($people)
            ->setTotalNumberOfPeopleInView($totalNumberOfPeopleInView)
            ->setFirstMatchingRowIndex($firstMatchingRowIndex)
            ->setFirstLoadedRowIndex($firstLoadedRowIndex)
            ->setTransactionId($transactionId);
    }
    /**
     * Get People value
     * @return \Ews\ArrayType\EwsArrayOfPeopleType|null
     */
    public function getPeople()
    {
        return $this->People;
    }
    /**
     * Set People value
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $people
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setPeople(\Ews\ArrayType\EwsArrayOfPeopleType $people = null)
    {
        $this->People = $people;
        return $this;
    }
    /**
     * Get TotalNumberOfPeopleInView value
     * @return int|null
     */
    public function getTotalNumberOfPeopleInView()
    {
        return $this->TotalNumberOfPeopleInView;
    }
    /**
     * Set TotalNumberOfPeopleInView value
     * @param int $totalNumberOfPeopleInView
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setTotalNumberOfPeopleInView($totalNumberOfPeopleInView = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfPeopleInView) && !is_numeric($totalNumberOfPeopleInView)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalNumberOfPeopleInView)), __LINE__);
        }
        $this->TotalNumberOfPeopleInView = $totalNumberOfPeopleInView;
        return $this;
    }
    /**
     * Get FirstMatchingRowIndex value
     * @return int|null
     */
    public function getFirstMatchingRowIndex()
    {
        return $this->FirstMatchingRowIndex;
    }
    /**
     * Set FirstMatchingRowIndex value
     * @param int $firstMatchingRowIndex
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setFirstMatchingRowIndex($firstMatchingRowIndex = null)
    {
        // validation for constraint: int
        if (!is_null($firstMatchingRowIndex) && !is_numeric($firstMatchingRowIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($firstMatchingRowIndex)), __LINE__);
        }
        $this->FirstMatchingRowIndex = $firstMatchingRowIndex;
        return $this;
    }
    /**
     * Get FirstLoadedRowIndex value
     * @return int|null
     */
    public function getFirstLoadedRowIndex()
    {
        return $this->FirstLoadedRowIndex;
    }
    /**
     * Set FirstLoadedRowIndex value
     * @param int $firstLoadedRowIndex
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setFirstLoadedRowIndex($firstLoadedRowIndex = null)
    {
        // validation for constraint: int
        if (!is_null($firstLoadedRowIndex) && !is_numeric($firstLoadedRowIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($firstLoadedRowIndex)), __LINE__);
        }
        $this->FirstLoadedRowIndex = $firstLoadedRowIndex;
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($transactionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($transactionId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
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
