<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MasterMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMasterMailboxType extends AbstractStructBase
{
    /**
     * The MailboxType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MailboxType;
    /**
     * The Alias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * The GroupType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GroupType;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Photo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Photo;
    /**
     * The SharePointUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SharePointUrl;
    /**
     * The InboxUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InboxUrl;
    /**
     * The CalendarUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CalendarUrl;
    /**
     * The DomainController
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DomainController;
    /**
     * Constructor method for MasterMailboxType
     * @uses EwsMasterMailboxType::setMailboxType()
     * @uses EwsMasterMailboxType::setAlias()
     * @uses EwsMasterMailboxType::setDisplayName()
     * @uses EwsMasterMailboxType::setSmtpAddress()
     * @uses EwsMasterMailboxType::setGroupType()
     * @uses EwsMasterMailboxType::setDescription()
     * @uses EwsMasterMailboxType::setPhoto()
     * @uses EwsMasterMailboxType::setSharePointUrl()
     * @uses EwsMasterMailboxType::setInboxUrl()
     * @uses EwsMasterMailboxType::setCalendarUrl()
     * @uses EwsMasterMailboxType::setDomainController()
     * @param string $mailboxType
     * @param string $alias
     * @param string $displayName
     * @param string $smtpAddress
     * @param string $groupType
     * @param string $description
     * @param string $photo
     * @param string $sharePointUrl
     * @param string $inboxUrl
     * @param string $calendarUrl
     * @param string $domainController
     */
    public function __construct($mailboxType = null, $alias = null, $displayName = null, $smtpAddress = null, $groupType = null, $description = null, $photo = null, $sharePointUrl = null, $inboxUrl = null, $calendarUrl = null, $domainController = null)
    {
        $this
            ->setMailboxType($mailboxType)
            ->setAlias($alias)
            ->setDisplayName($displayName)
            ->setSmtpAddress($smtpAddress)
            ->setGroupType($groupType)
            ->setDescription($description)
            ->setPhoto($photo)
            ->setSharePointUrl($sharePointUrl)
            ->setInboxUrl($inboxUrl)
            ->setCalendarUrl($calendarUrl)
            ->setDomainController($domainController);
    }
    /**
     * Get MailboxType value
     * @return string
     */
    public function getMailboxType()
    {
        return $this->MailboxType;
    }
    /**
     * Set MailboxType value
     * @param string $mailboxType
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setMailboxType($mailboxType = null)
    {
        $this->MailboxType = $mailboxType;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setAlias($alias = null)
    {
        $this->Alias = $alias;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Get GroupType value
     * @return string|null
     */
    public function getGroupType()
    {
        return $this->GroupType;
    }
    /**
     * Set GroupType value
     * @uses \Ews\EnumType\EwsModernGroupTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsModernGroupTypeType::getValidValues()
     * @param string $groupType
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setGroupType($groupType = null)
    {
        if (!\Ews\EnumType\EwsModernGroupTypeType::valueIsValid($groupType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $groupType, implode(', ', \Ews\EnumType\EwsModernGroupTypeType::getValidValues())), __LINE__);
        }
        $this->GroupType = $groupType;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Photo value
     * @return string|null
     */
    public function getPhoto()
    {
        return $this->Photo;
    }
    /**
     * Set Photo value
     * @param string $photo
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setPhoto($photo = null)
    {
        $this->Photo = $photo;
        return $this;
    }
    /**
     * Get SharePointUrl value
     * @return string|null
     */
    public function getSharePointUrl()
    {
        return $this->SharePointUrl;
    }
    /**
     * Set SharePointUrl value
     * @param string $sharePointUrl
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setSharePointUrl($sharePointUrl = null)
    {
        $this->SharePointUrl = $sharePointUrl;
        return $this;
    }
    /**
     * Get InboxUrl value
     * @return string|null
     */
    public function getInboxUrl()
    {
        return $this->InboxUrl;
    }
    /**
     * Set InboxUrl value
     * @param string $inboxUrl
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setInboxUrl($inboxUrl = null)
    {
        $this->InboxUrl = $inboxUrl;
        return $this;
    }
    /**
     * Get CalendarUrl value
     * @return string|null
     */
    public function getCalendarUrl()
    {
        return $this->CalendarUrl;
    }
    /**
     * Set CalendarUrl value
     * @param string $calendarUrl
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setCalendarUrl($calendarUrl = null)
    {
        $this->CalendarUrl = $calendarUrl;
        return $this;
    }
    /**
     * Get DomainController value
     * @return string|null
     */
    public function getDomainController()
    {
        return $this->DomainController;
    }
    /**
     * Set DomainController value
     * @param string $domainController
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function setDomainController($domainController = null)
    {
        $this->DomainController = $domainController;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMasterMailboxType
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
