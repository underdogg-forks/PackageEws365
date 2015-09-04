<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateInboxRulesRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUpdateInboxRulesRequestType extends EwsBaseRequestType
{
    /**
     * The Operations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Represents an array of rule operations to be performed
     * @var \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public $Operations;
    /**
     * The MailboxSmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MailboxSmtpAddress;
    /**
     * The RemoveOutlookRuleBlob
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $RemoveOutlookRuleBlob;
    /**
     * Constructor method for UpdateInboxRulesRequestType
     * @uses EwsUpdateInboxRulesRequestType::setOperations()
     * @uses EwsUpdateInboxRulesRequestType::setMailboxSmtpAddress()
     * @uses EwsUpdateInboxRulesRequestType::setRemoveOutlookRuleBlob()
     * @param \Ews\StructType\EwsArrayOfRuleOperationsType $operations
     * @param string $mailboxSmtpAddress
     * @param boolean $removeOutlookRuleBlob
     */
    public function __construct(\Ews\StructType\EwsArrayOfRuleOperationsType $operations = null, $mailboxSmtpAddress = null, $removeOutlookRuleBlob = null)
    {
        $this
            ->setOperations($operations)
            ->setMailboxSmtpAddress($mailboxSmtpAddress)
            ->setRemoveOutlookRuleBlob($removeOutlookRuleBlob);
    }
    /**
     * Get Operations value
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public function getOperations()
    {
        return $this->Operations;
    }
    /**
     * Set Operations value
     * @param \Ews\StructType\EwsArrayOfRuleOperationsType $operations
     * @return \Ews\StructType\EwsUpdateInboxRulesRequestType
     */
    public function setOperations(\Ews\StructType\EwsArrayOfRuleOperationsType $operations = null)
    {
        $this->Operations = $operations;
        return $this;
    }
    /**
     * Get MailboxSmtpAddress value
     * @return string|null
     */
    public function getMailboxSmtpAddress()
    {
        return $this->MailboxSmtpAddress;
    }
    /**
     * Set MailboxSmtpAddress value
     * @param string $mailboxSmtpAddress
     * @return \Ews\StructType\EwsUpdateInboxRulesRequestType
     */
    public function setMailboxSmtpAddress($mailboxSmtpAddress = null)
    {
        $this->MailboxSmtpAddress = $mailboxSmtpAddress;
        return $this;
    }
    /**
     * Get RemoveOutlookRuleBlob value
     * @return boolean|null
     */
    public function getRemoveOutlookRuleBlob()
    {
        return $this->RemoveOutlookRuleBlob;
    }
    /**
     * Set RemoveOutlookRuleBlob value
     * @param boolean $removeOutlookRuleBlob
     * @return \Ews\StructType\EwsUpdateInboxRulesRequestType
     */
    public function setRemoveOutlookRuleBlob($removeOutlookRuleBlob = null)
    {
        $this->RemoveOutlookRuleBlob = $removeOutlookRuleBlob;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateInboxRulesRequestType
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