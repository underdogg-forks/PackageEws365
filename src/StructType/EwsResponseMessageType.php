<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsResponseMessageType extends AbstractStructBase
{
    /**
     * The ResponseClass
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ResponseClass;
    /**
     * The MessageText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MessageText;
    /**
     * The ResponseCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Represents the message keys that can be returned by response error messages
     * @var string
     */
    public $ResponseCode;
    /**
     * The DescriptiveLinkKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DescriptiveLinkKey;
    /**
     * The MessageXml
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMessageXml
     */
    public $MessageXml;
    /**
     * Constructor method for ResponseMessageType
     * @uses EwsResponseMessageType::setResponseClass()
     * @uses EwsResponseMessageType::setMessageText()
     * @uses EwsResponseMessageType::setResponseCode()
     * @uses EwsResponseMessageType::setDescriptiveLinkKey()
     * @uses EwsResponseMessageType::setMessageXml()
     * @param string $responseClass
     * @param string $messageText
     * @param string $responseCode
     * @param int $descriptiveLinkKey
     * @param \Ews\StructType\EwsMessageXml $messageXml
     */
    public function __construct($responseClass = null, $messageText = null, $responseCode = null, $descriptiveLinkKey = null, \Ews\StructType\EwsMessageXml $messageXml = null)
    {
        $this
            ->setResponseClass($responseClass)
            ->setMessageText($messageText)
            ->setResponseCode($responseCode)
            ->setDescriptiveLinkKey($descriptiveLinkKey)
            ->setMessageXml($messageXml);
    }
    /**
     * Get ResponseClass value
     * @return string
     */
    public function getResponseClass()
    {
        return $this->ResponseClass;
    }
    /**
     * Set ResponseClass value
     * @uses \Ews\EnumType\EwsResponseClassType::valueIsValid()
     * @uses \Ews\EnumType\EwsResponseClassType::getValidValues()
     * @param string $responseClass
     * @return \Ews\StructType\EwsResponseMessageType
     */
    public function setResponseClass($responseClass = null)
    {
        if (!\Ews\EnumType\EwsResponseClassType::valueIsValid($responseClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $responseClass, implode(', ', \Ews\EnumType\EwsResponseClassType::getValidValues())), __LINE__);
        }
        $this->ResponseClass = $responseClass;
        return $this;
    }
    /**
     * Get MessageText value
     * @return string|null
     */
    public function getMessageText()
    {
        return $this->MessageText;
    }
    /**
     * Set MessageText value
     * @param string $messageText
     * @return \Ews\StructType\EwsResponseMessageType
     */
    public function setMessageText($messageText = null)
    {
        $this->MessageText = $messageText;
        return $this;
    }
    /**
     * Get ResponseCode value
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }
    /**
     * Set ResponseCode value
     * @uses \Ews\EnumType\EwsResponseCodeType::valueIsValid()
     * @uses \Ews\EnumType\EwsResponseCodeType::getValidValues()
     * @param string $responseCode
     * @return \Ews\StructType\EwsResponseMessageType
     */
    public function setResponseCode($responseCode = null)
    {
        if (!\Ews\EnumType\EwsResponseCodeType::valueIsValid($responseCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $responseCode, implode(', ', \Ews\EnumType\EwsResponseCodeType::getValidValues())), __LINE__);
        }
        $this->ResponseCode = $responseCode;
        return $this;
    }
    /**
     * Get DescriptiveLinkKey value
     * @return int|null
     */
    public function getDescriptiveLinkKey()
    {
        return $this->DescriptiveLinkKey;
    }
    /**
     * Set DescriptiveLinkKey value
     * @param int $descriptiveLinkKey
     * @return \Ews\StructType\EwsResponseMessageType
     */
    public function setDescriptiveLinkKey($descriptiveLinkKey = null)
    {
        $this->DescriptiveLinkKey = $descriptiveLinkKey;
        return $this;
    }
    /**
     * Get MessageXml value
     * @return \Ews\StructType\EwsMessageXml|null
     */
    public function getMessageXml()
    {
        return $this->MessageXml;
    }
    /**
     * Set MessageXml value
     * @param \Ews\StructType\EwsMessageXml $messageXml
     * @return \Ews\StructType\EwsResponseMessageType
     */
    public function setMessageXml(\Ews\StructType\EwsMessageXml $messageXml = null)
    {
        $this->MessageXml = $messageXml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsResponseMessageType
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