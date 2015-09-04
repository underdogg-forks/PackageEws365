<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsItemType extends AbstractStructBase
{
    /**
     * The MimeContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMimeContentType
     */
    public $MimeContent;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The ParentFolderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $ParentFolderId;
    /**
     * The ItemClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemClass;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Sensitivity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Sensitivity;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $Body;
    /**
     * The Attachments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
    /**
     * The DateTimeReceived
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $DateTimeReceived;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The Categories
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Categories;
    /**
     * The Importance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Importance;
    /**
     * The InReplyTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InReplyTo;
    /**
     * The IsSubmitted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsSubmitted;
    /**
     * The IsDraft
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsDraft;
    /**
     * The IsFromMe
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsFromMe;
    /**
     * The IsResend
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsResend;
    /**
     * The IsUnmodified
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsUnmodified;
    /**
     * The InternetMessageHeaders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;
    /**
     * The DateTimeSent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $DateTimeSent;
    /**
     * The DateTimeCreated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $DateTimeCreated;
    /**
     * The ResponseObjects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType
     */
    public $ResponseObjects;
    /**
     * The ReminderDueBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ReminderDueBy;
    /**
     * The ReminderIsSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $ReminderIsSet;
    /**
     * The ReminderNextTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ReminderNextTime;
    /**
     * The ReminderMinutesBeforeStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxInclusive: 1525252321
     * - minInclusive: 1525252321
     * @var int
     */
    public $ReminderMinutesBeforeStart;
    /**
     * The DisplayCc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayCc;
    /**
     * The DisplayTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayTo;
    /**
     * The HasAttachments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $HasAttachments;
    /**
     * The ExtendedProperty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Represents an extended property instance (both its path identifier along with its associated value).
     * @var \Ews\StructType\EwsExtendedPropertyType
     */
    public $ExtendedProperty;
    /**
     * The Culture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var language
     */
    public $Culture;
    /**
     * The EffectiveRights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEffectiveRightsType
     */
    public $EffectiveRights;
    /**
     * The LastModifiedName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedName;
    /**
     * The LastModifiedTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $LastModifiedTime;
    /**
     * The IsAssociated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsAssociated;
    /**
     * The WebClientReadFormQueryString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WebClientReadFormQueryString;
    /**
     * The WebClientEditFormQueryString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WebClientEditFormQueryString;
    /**
     * The ConversationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ConversationId;
    /**
     * The UniqueBody
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $UniqueBody;
    /**
     * The Flag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFlagType
     */
    public $Flag;
    /**
     * The StoreEntryId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var base64Binary
     */
    public $StoreEntryId;
    /**
     * The InstanceKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var base64Binary
     */
    public $InstanceKey;
    /**
     * The NormalizedBody
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $NormalizedBody;
    /**
     * The EntityExtractionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEntityExtractionResultType
     */
    public $EntityExtractionResult;
    /**
     * The PolicyTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRetentionTagType
     */
    public $PolicyTag;
    /**
     * The ArchiveTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRetentionTagType
     */
    public $ArchiveTag;
    /**
     * The RetentionDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $RetentionDate;
    /**
     * The Preview
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Preview;
    /**
     * The RightsManagementLicenseData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRightsManagementLicenseDataType
     */
    public $RightsManagementLicenseData;
    /**
     * The PredictedActionReasons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     */
    public $PredictedActionReasons;
    /**
     * The IsClutter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsClutter;
    /**
     * The BlockStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $BlockStatus;
    /**
     * The HasBlockedImages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $HasBlockedImages;
    /**
     * The TextBody
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $TextBody;
    /**
     * The IconIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IconIndex;
    /**
     * The SearchKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var base64Binary
     */
    public $SearchKey;
    /**
     * The SortKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var long
     */
    public $SortKey;
    /**
     * The Hashtags
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Hashtags;
    /**
     * The Mentions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $Mentions;
    /**
     * The MentionedMe
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $MentionedMe;
    /**
     * The PendingSocialActivityTagIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $PendingSocialActivityTagIds;
    /**
     * Constructor method for ItemType
     * @uses EwsItemType::setMimeContent()
     * @uses EwsItemType::setItemId()
     * @uses EwsItemType::setParentFolderId()
     * @uses EwsItemType::setItemClass()
     * @uses EwsItemType::setSubject()
     * @uses EwsItemType::setSensitivity()
     * @uses EwsItemType::setBody()
     * @uses EwsItemType::setAttachments()
     * @uses EwsItemType::setDateTimeReceived()
     * @uses EwsItemType::setSize()
     * @uses EwsItemType::setCategories()
     * @uses EwsItemType::setImportance()
     * @uses EwsItemType::setInReplyTo()
     * @uses EwsItemType::setIsSubmitted()
     * @uses EwsItemType::setIsDraft()
     * @uses EwsItemType::setIsFromMe()
     * @uses EwsItemType::setIsResend()
     * @uses EwsItemType::setIsUnmodified()
     * @uses EwsItemType::setInternetMessageHeaders()
     * @uses EwsItemType::setDateTimeSent()
     * @uses EwsItemType::setDateTimeCreated()
     * @uses EwsItemType::setResponseObjects()
     * @uses EwsItemType::setReminderDueBy()
     * @uses EwsItemType::setReminderIsSet()
     * @uses EwsItemType::setReminderNextTime()
     * @uses EwsItemType::setReminderMinutesBeforeStart()
     * @uses EwsItemType::setDisplayCc()
     * @uses EwsItemType::setDisplayTo()
     * @uses EwsItemType::setHasAttachments()
     * @uses EwsItemType::setExtendedProperty()
     * @uses EwsItemType::setCulture()
     * @uses EwsItemType::setEffectiveRights()
     * @uses EwsItemType::setLastModifiedName()
     * @uses EwsItemType::setLastModifiedTime()
     * @uses EwsItemType::setIsAssociated()
     * @uses EwsItemType::setWebClientReadFormQueryString()
     * @uses EwsItemType::setWebClientEditFormQueryString()
     * @uses EwsItemType::setConversationId()
     * @uses EwsItemType::setUniqueBody()
     * @uses EwsItemType::setFlag()
     * @uses EwsItemType::setStoreEntryId()
     * @uses EwsItemType::setInstanceKey()
     * @uses EwsItemType::setNormalizedBody()
     * @uses EwsItemType::setEntityExtractionResult()
     * @uses EwsItemType::setPolicyTag()
     * @uses EwsItemType::setArchiveTag()
     * @uses EwsItemType::setRetentionDate()
     * @uses EwsItemType::setPreview()
     * @uses EwsItemType::setRightsManagementLicenseData()
     * @uses EwsItemType::setPredictedActionReasons()
     * @uses EwsItemType::setIsClutter()
     * @uses EwsItemType::setBlockStatus()
     * @uses EwsItemType::setHasBlockedImages()
     * @uses EwsItemType::setTextBody()
     * @uses EwsItemType::setIconIndex()
     * @uses EwsItemType::setSearchKey()
     * @uses EwsItemType::setSortKey()
     * @uses EwsItemType::setHashtags()
     * @uses EwsItemType::setMentions()
     * @uses EwsItemType::setMentionedMe()
     * @uses EwsItemType::setPendingSocialActivityTagIds()
     * @param \Ews\StructType\EwsMimeContentType $mimeContent
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @param string $itemClass
     * @param string $subject
     * @param string $sensitivity
     * @param \Ews\StructType\EwsBodyType $body
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @param dateTime $dateTimeReceived
     * @param int $size
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @param string $importance
     * @param string $inReplyTo
     * @param boolean $isSubmitted
     * @param boolean $isDraft
     * @param boolean $isFromMe
     * @param boolean $isResend
     * @param boolean $isUnmodified
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     * $internetMessageHeaders
     * @param dateTime $dateTimeSent
     * @param dateTime $dateTimeCreated
     * @param \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects
     * @param dateTime $reminderDueBy
     * @param boolean $reminderIsSet
     * @param dateTime $reminderNextTime
     * @param int $reminderMinutesBeforeStart
     * @param string $displayCc
     * @param string $displayTo
     * @param boolean $hasAttachments
     * @param \Ews\StructType\EwsExtendedPropertyType $extendedProperty
     * @param language $culture
     * @param \Ews\StructType\EwsEffectiveRightsType $effectiveRights
     * @param string $lastModifiedName
     * @param dateTime $lastModifiedTime
     * @param boolean $isAssociated
     * @param string $webClientReadFormQueryString
     * @param string $webClientEditFormQueryString
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @param \Ews\StructType\EwsBodyType $uniqueBody
     * @param \Ews\StructType\EwsFlagType $flag
     * @param base64Binary $storeEntryId
     * @param base64Binary $instanceKey
     * @param \Ews\StructType\EwsBodyType $normalizedBody
     * @param \Ews\StructType\EwsEntityExtractionResultType $entityExtractionResult
     * @param \Ews\StructType\EwsRetentionTagType $policyTag
     * @param \Ews\StructType\EwsRetentionTagType $archiveTag
     * @param dateTime $retentionDate
     * @param string $preview
     * @param \Ews\StructType\EwsRightsManagementLicenseDataType
     * $rightsManagementLicenseData
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     * $predictedActionReasons
     * @param boolean $isClutter
     * @param boolean $blockStatus
     * @param boolean $hasBlockedImages
     * @param \Ews\StructType\EwsBodyType $textBody
     * @param string $iconIndex
     * @param base64Binary $searchKey
     * @param long $sortKey
     * @param \Ews\ArrayType\EwsArrayOfStringsType $hashtags
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $mentions
     * @param boolean $mentionedMe
     * @param \Ews\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds
     */
    public function __construct(\Ews\StructType\EwsMimeContentType $mimeContent = null, \Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsFolderIdType $parentFolderId = null, $itemClass = null, $subject = null, $sensitivity = null, \Ews\StructType\EwsBodyType $body = null, \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null, $dateTimeReceived = null, $size = null, \Ews\ArrayType\EwsArrayOfStringsType $categories = null, $importance = null, $inReplyTo = null, $isSubmitted = null, $isDraft = null, $isFromMe = null, $isResend = null, $isUnmodified = null, \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null, $dateTimeSent = null, $dateTimeCreated = null, \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects = null, $reminderDueBy = null, $reminderIsSet = null, $reminderNextTime = null, $reminderMinutesBeforeStart = null, $displayCc = null, $displayTo = null, $hasAttachments = null, \Ews\StructType\EwsExtendedPropertyType $extendedProperty = null, $culture = null, \Ews\StructType\EwsEffectiveRightsType $effectiveRights = null, $lastModifiedName = null, $lastModifiedTime = null, $isAssociated = null, $webClientReadFormQueryString = null, $webClientEditFormQueryString = null, \Ews\StructType\EwsItemIdType $conversationId = null, \Ews\StructType\EwsBodyType $uniqueBody = null, \Ews\StructType\EwsFlagType $flag = null, base64Binary $storeEntryId = null, base64Binary $instanceKey = null, \Ews\StructType\EwsBodyType $normalizedBody = null, \Ews\StructType\EwsEntityExtractionResultType $entityExtractionResult = null, \Ews\StructType\EwsRetentionTagType $policyTag = null, \Ews\StructType\EwsRetentionTagType $archiveTag = null, $retentionDate = null, $preview = null, \Ews\StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData = null, \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons = null, $isClutter = null, $blockStatus = null, $hasBlockedImages = null, \Ews\StructType\EwsBodyType $textBody = null, $iconIndex = null, base64Binary $searchKey = null, $sortKey = null, \Ews\ArrayType\EwsArrayOfStringsType $hashtags = null, \Ews\ArrayType\EwsArrayOfRecipientsType $mentions = null, $mentionedMe = null, \Ews\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds = null)
    {
        $this
            ->setMimeContent($mimeContent)
            ->setItemId($itemId)
            ->setParentFolderId($parentFolderId)
            ->setItemClass($itemClass)
            ->setSubject($subject)
            ->setSensitivity($sensitivity)
            ->setBody($body)
            ->setAttachments($attachments)
            ->setDateTimeReceived($dateTimeReceived)
            ->setSize($size)
            ->setCategories($categories)
            ->setImportance($importance)
            ->setInReplyTo($inReplyTo)
            ->setIsSubmitted($isSubmitted)
            ->setIsDraft($isDraft)
            ->setIsFromMe($isFromMe)
            ->setIsResend($isResend)
            ->setIsUnmodified($isUnmodified)
            ->setInternetMessageHeaders($internetMessageHeaders)
            ->setDateTimeSent($dateTimeSent)
            ->setDateTimeCreated($dateTimeCreated)
            ->setResponseObjects($responseObjects)
            ->setReminderDueBy($reminderDueBy)
            ->setReminderIsSet($reminderIsSet)
            ->setReminderNextTime($reminderNextTime)
            ->setReminderMinutesBeforeStart($reminderMinutesBeforeStart)
            ->setDisplayCc($displayCc)
            ->setDisplayTo($displayTo)
            ->setHasAttachments($hasAttachments)
            ->setExtendedProperty($extendedProperty)
            ->setCulture($culture)
            ->setEffectiveRights($effectiveRights)
            ->setLastModifiedName($lastModifiedName)
            ->setLastModifiedTime($lastModifiedTime)
            ->setIsAssociated($isAssociated)
            ->setWebClientReadFormQueryString($webClientReadFormQueryString)
            ->setWebClientEditFormQueryString($webClientEditFormQueryString)
            ->setConversationId($conversationId)
            ->setUniqueBody($uniqueBody)
            ->setFlag($flag)
            ->setStoreEntryId($storeEntryId)
            ->setInstanceKey($instanceKey)
            ->setNormalizedBody($normalizedBody)
            ->setEntityExtractionResult($entityExtractionResult)
            ->setPolicyTag($policyTag)
            ->setArchiveTag($archiveTag)
            ->setRetentionDate($retentionDate)
            ->setPreview($preview)
            ->setRightsManagementLicenseData($rightsManagementLicenseData)
            ->setPredictedActionReasons($predictedActionReasons)
            ->setIsClutter($isClutter)
            ->setBlockStatus($blockStatus)
            ->setHasBlockedImages($hasBlockedImages)
            ->setTextBody($textBody)
            ->setIconIndex($iconIndex)
            ->setSearchKey($searchKey)
            ->setSortKey($sortKey)
            ->setHashtags($hashtags)
            ->setMentions($mentions)
            ->setMentionedMe($mentionedMe)
            ->setPendingSocialActivityTagIds($pendingSocialActivityTagIds);
    }
    /**
     * Get MimeContent value
     * @return \Ews\StructType\EwsMimeContentType|null
     */
    public function getMimeContent()
    {
        return $this->MimeContent;
    }
    /**
     * Set MimeContent value
     * @param \Ews\StructType\EwsMimeContentType $mimeContent
     * @return \Ews\StructType\EwsItemType
     */
    public function setMimeContent(\Ews\StructType\EwsMimeContentType $mimeContent = null)
    {
        $this->MimeContent = $mimeContent;
        return $this;
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsItemType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsItemType
     */
    public function setParentFolderId(\Ews\StructType\EwsFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
        return $this;
    }
    /**
     * Get ItemClass value
     * @return string|null
     */
    public function getItemClass()
    {
        return $this->ItemClass;
    }
    /**
     * Set ItemClass value
     * @param string $itemClass
     * @return \Ews\StructType\EwsItemType
     */
    public function setItemClass($itemClass = null)
    {
        $this->ItemClass = $itemClass;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsItemType
     */
    public function setSubject($subject = null)
    {
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get Sensitivity value
     * @return string|null
     */
    public function getSensitivity()
    {
        return $this->Sensitivity;
    }
    /**
     * Set Sensitivity value
     * @uses \Ews\EnumType\EwsSensitivityChoicesType::valueIsValid()
     * @uses \Ews\EnumType\EwsSensitivityChoicesType::getValidValues()
     * @param string $sensitivity
     * @return \Ews\StructType\EwsItemType
     */
    public function setSensitivity($sensitivity = null)
    {
        if (!\Ews\EnumType\EwsSensitivityChoicesType::valueIsValid($sensitivity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sensitivity, implode(', ', \Ews\EnumType\EwsSensitivityChoicesType::getValidValues())), __LINE__);
        }
        $this->Sensitivity = $sensitivity;
        return $this;
    }
    /**
     * Get Body value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \Ews\StructType\EwsBodyType $body
     * @return \Ews\StructType\EwsItemType
     */
    public function setBody(\Ews\StructType\EwsBodyType $body = null)
    {
        $this->Body = $body;
        return $this;
    }
    /**
     * Get Attachments value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \Ews\StructType\EwsItemType
     */
    public function setAttachments(\Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
    /**
     * Get DateTimeReceived value
     * @return dateTime|null
     */
    public function getDateTimeReceived()
    {
        return $this->DateTimeReceived;
    }
    /**
     * Set DateTimeReceived value
     * @param dateTime $dateTimeReceived
     * @return \Ews\StructType\EwsItemType
     */
    public function setDateTimeReceived($dateTimeReceived = null)
    {
        $this->DateTimeReceived = $dateTimeReceived;
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Ews\StructType\EwsItemType
     */
    public function setSize($size = null)
    {
        $this->Size = $size;
        return $this;
    }
    /**
     * Get Categories value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getCategories()
    {
        return $this->Categories;
    }
    /**
     * Set Categories value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $categories
     * @return \Ews\StructType\EwsItemType
     */
    public function setCategories(\Ews\ArrayType\EwsArrayOfStringsType $categories = null)
    {
        $this->Categories = $categories;
        return $this;
    }
    /**
     * Get Importance value
     * @return string|null
     */
    public function getImportance()
    {
        return $this->Importance;
    }
    /**
     * Set Importance value
     * @uses \Ews\EnumType\EwsImportanceChoicesType::valueIsValid()
     * @uses \Ews\EnumType\EwsImportanceChoicesType::getValidValues()
     * @param string $importance
     * @return \Ews\StructType\EwsItemType
     */
    public function setImportance($importance = null)
    {
        if (!\Ews\EnumType\EwsImportanceChoicesType::valueIsValid($importance)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importance, implode(', ', \Ews\EnumType\EwsImportanceChoicesType::getValidValues())), __LINE__);
        }
        $this->Importance = $importance;
        return $this;
    }
    /**
     * Get InReplyTo value
     * @return string|null
     */
    public function getInReplyTo()
    {
        return $this->InReplyTo;
    }
    /**
     * Set InReplyTo value
     * @param string $inReplyTo
     * @return \Ews\StructType\EwsItemType
     */
    public function setInReplyTo($inReplyTo = null)
    {
        $this->InReplyTo = $inReplyTo;
        return $this;
    }
    /**
     * Get IsSubmitted value
     * @return boolean|null
     */
    public function getIsSubmitted()
    {
        return $this->IsSubmitted;
    }
    /**
     * Set IsSubmitted value
     * @param boolean $isSubmitted
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsSubmitted($isSubmitted = null)
    {
        $this->IsSubmitted = $isSubmitted;
        return $this;
    }
    /**
     * Get IsDraft value
     * @return boolean|null
     */
    public function getIsDraft()
    {
        return $this->IsDraft;
    }
    /**
     * Set IsDraft value
     * @param boolean $isDraft
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsDraft($isDraft = null)
    {
        $this->IsDraft = $isDraft;
        return $this;
    }
    /**
     * Get IsFromMe value
     * @return boolean|null
     */
    public function getIsFromMe()
    {
        return $this->IsFromMe;
    }
    /**
     * Set IsFromMe value
     * @param boolean $isFromMe
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsFromMe($isFromMe = null)
    {
        $this->IsFromMe = $isFromMe;
        return $this;
    }
    /**
     * Get IsResend value
     * @return boolean|null
     */
    public function getIsResend()
    {
        return $this->IsResend;
    }
    /**
     * Set IsResend value
     * @param boolean $isResend
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsResend($isResend = null)
    {
        $this->IsResend = $isResend;
        return $this;
    }
    /**
     * Get IsUnmodified value
     * @return boolean|null
     */
    public function getIsUnmodified()
    {
        return $this->IsUnmodified;
    }
    /**
     * Set IsUnmodified value
     * @param boolean $isUnmodified
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsUnmodified($isUnmodified = null)
    {
        $this->IsUnmodified = $isUnmodified;
        return $this;
    }
    /**
     * Get InternetMessageHeaders value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType|null
     */
    public function getInternetMessageHeaders()
    {
        return $this->InternetMessageHeaders;
    }
    /**
     * Set InternetMessageHeaders value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     * $internetMessageHeaders
     * @return \Ews\StructType\EwsItemType
     */
    public function setInternetMessageHeaders(\Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null)
    {
        $this->InternetMessageHeaders = $internetMessageHeaders;
        return $this;
    }
    /**
     * Get DateTimeSent value
     * @return dateTime|null
     */
    public function getDateTimeSent()
    {
        return $this->DateTimeSent;
    }
    /**
     * Set DateTimeSent value
     * @param dateTime $dateTimeSent
     * @return \Ews\StructType\EwsItemType
     */
    public function setDateTimeSent($dateTimeSent = null)
    {
        $this->DateTimeSent = $dateTimeSent;
        return $this;
    }
    /**
     * Get DateTimeCreated value
     * @return dateTime|null
     */
    public function getDateTimeCreated()
    {
        return $this->DateTimeCreated;
    }
    /**
     * Set DateTimeCreated value
     * @param dateTime $dateTimeCreated
     * @return \Ews\StructType\EwsItemType
     */
    public function setDateTimeCreated($dateTimeCreated = null)
    {
        $this->DateTimeCreated = $dateTimeCreated;
        return $this;
    }
    /**
     * Get ResponseObjects value
     * @return \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType|null
     */
    public function getResponseObjects()
    {
        return $this->ResponseObjects;
    }
    /**
     * Set ResponseObjects value
     * @param \Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects
     * @return \Ews\StructType\EwsItemType
     */
    public function setResponseObjects(\Ews\StructType\EwsNonEmptyArrayOfResponseObjectsType $responseObjects = null)
    {
        $this->ResponseObjects = $responseObjects;
        return $this;
    }
    /**
     * Get ReminderDueBy value
     * @return dateTime|null
     */
    public function getReminderDueBy()
    {
        return $this->ReminderDueBy;
    }
    /**
     * Set ReminderDueBy value
     * @param dateTime $reminderDueBy
     * @return \Ews\StructType\EwsItemType
     */
    public function setReminderDueBy($reminderDueBy = null)
    {
        $this->ReminderDueBy = $reminderDueBy;
        return $this;
    }
    /**
     * Get ReminderIsSet value
     * @return boolean|null
     */
    public function getReminderIsSet()
    {
        return $this->ReminderIsSet;
    }
    /**
     * Set ReminderIsSet value
     * @param boolean $reminderIsSet
     * @return \Ews\StructType\EwsItemType
     */
    public function setReminderIsSet($reminderIsSet = null)
    {
        $this->ReminderIsSet = $reminderIsSet;
        return $this;
    }
    /**
     * Get ReminderNextTime value
     * @return dateTime|null
     */
    public function getReminderNextTime()
    {
        return $this->ReminderNextTime;
    }
    /**
     * Set ReminderNextTime value
     * @param dateTime $reminderNextTime
     * @return \Ews\StructType\EwsItemType
     */
    public function setReminderNextTime($reminderNextTime = null)
    {
        $this->ReminderNextTime = $reminderNextTime;
        return $this;
    }
    /**
     * Get ReminderMinutesBeforeStart value
     * @return int|null
     */
    public function getReminderMinutesBeforeStart()
    {
        return $this->ReminderMinutesBeforeStart;
    }
    /**
     * Set ReminderMinutesBeforeStart value
     * @param int $reminderMinutesBeforeStart
     * @return \Ews\StructType\EwsItemType
     */
    public function setReminderMinutesBeforeStart($reminderMinutesBeforeStart = null)
    {
        $this->ReminderMinutesBeforeStart = $reminderMinutesBeforeStart;
        return $this;
    }
    /**
     * Get DisplayCc value
     * @return string|null
     */
    public function getDisplayCc()
    {
        return $this->DisplayCc;
    }
    /**
     * Set DisplayCc value
     * @param string $displayCc
     * @return \Ews\StructType\EwsItemType
     */
    public function setDisplayCc($displayCc = null)
    {
        $this->DisplayCc = $displayCc;
        return $this;
    }
    /**
     * Get DisplayTo value
     * @return string|null
     */
    public function getDisplayTo()
    {
        return $this->DisplayTo;
    }
    /**
     * Set DisplayTo value
     * @param string $displayTo
     * @return \Ews\StructType\EwsItemType
     */
    public function setDisplayTo($displayTo = null)
    {
        $this->DisplayTo = $displayTo;
        return $this;
    }
    /**
     * Get HasAttachments value
     * @return boolean|null
     */
    public function getHasAttachments()
    {
        return $this->HasAttachments;
    }
    /**
     * Set HasAttachments value
     * @param boolean $hasAttachments
     * @return \Ews\StructType\EwsItemType
     */
    public function setHasAttachments($hasAttachments = null)
    {
        $this->HasAttachments = $hasAttachments;
        return $this;
    }
    /**
     * Get ExtendedProperty value
     * @return \Ews\StructType\EwsExtendedPropertyType|null
     */
    public function getExtendedProperty()
    {
        return $this->ExtendedProperty;
    }
    /**
     * Set ExtendedProperty value
     * @param \Ews\StructType\EwsExtendedPropertyType $extendedProperty
     * @return \Ews\StructType\EwsItemType
     */
    public function setExtendedProperty(\Ews\StructType\EwsExtendedPropertyType $extendedProperty = null)
    {
        $this->ExtendedProperty = $extendedProperty;
        return $this;
    }
    /**
     * Get Culture value
     * @return language|null
     */
    public function getCulture()
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param language $culture
     * @return \Ews\StructType\EwsItemType
     */
    public function setCulture($culture = null)
    {
        $this->Culture = $culture;
        return $this;
    }
    /**
     * Get EffectiveRights value
     * @return \Ews\StructType\EwsEffectiveRightsType|null
     */
    public function getEffectiveRights()
    {
        return $this->EffectiveRights;
    }
    /**
     * Set EffectiveRights value
     * @param \Ews\StructType\EwsEffectiveRightsType $effectiveRights
     * @return \Ews\StructType\EwsItemType
     */
    public function setEffectiveRights(\Ews\StructType\EwsEffectiveRightsType $effectiveRights = null)
    {
        $this->EffectiveRights = $effectiveRights;
        return $this;
    }
    /**
     * Get LastModifiedName value
     * @return string|null
     */
    public function getLastModifiedName()
    {
        return $this->LastModifiedName;
    }
    /**
     * Set LastModifiedName value
     * @param string $lastModifiedName
     * @return \Ews\StructType\EwsItemType
     */
    public function setLastModifiedName($lastModifiedName = null)
    {
        $this->LastModifiedName = $lastModifiedName;
        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return dateTime|null
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param dateTime $lastModifiedTime
     * @return \Ews\StructType\EwsItemType
     */
    public function setLastModifiedTime($lastModifiedTime = null)
    {
        $this->LastModifiedTime = $lastModifiedTime;
        return $this;
    }
    /**
     * Get IsAssociated value
     * @return boolean|null
     */
    public function getIsAssociated()
    {
        return $this->IsAssociated;
    }
    /**
     * Set IsAssociated value
     * @param boolean $isAssociated
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsAssociated($isAssociated = null)
    {
        $this->IsAssociated = $isAssociated;
        return $this;
    }
    /**
     * Get WebClientReadFormQueryString value
     * @return string|null
     */
    public function getWebClientReadFormQueryString()
    {
        return $this->WebClientReadFormQueryString;
    }
    /**
     * Set WebClientReadFormQueryString value
     * @param string $webClientReadFormQueryString
     * @return \Ews\StructType\EwsItemType
     */
    public function setWebClientReadFormQueryString($webClientReadFormQueryString = null)
    {
        $this->WebClientReadFormQueryString = $webClientReadFormQueryString;
        return $this;
    }
    /**
     * Get WebClientEditFormQueryString value
     * @return string|null
     */
    public function getWebClientEditFormQueryString()
    {
        return $this->WebClientEditFormQueryString;
    }
    /**
     * Set WebClientEditFormQueryString value
     * @param string $webClientEditFormQueryString
     * @return \Ews\StructType\EwsItemType
     */
    public function setWebClientEditFormQueryString($webClientEditFormQueryString = null)
    {
        $this->WebClientEditFormQueryString = $webClientEditFormQueryString;
        return $this;
    }
    /**
     * Get ConversationId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getConversationId()
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @return \Ews\StructType\EwsItemType
     */
    public function setConversationId(\Ews\StructType\EwsItemIdType $conversationId = null)
    {
        $this->ConversationId = $conversationId;
        return $this;
    }
    /**
     * Get UniqueBody value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getUniqueBody()
    {
        return $this->UniqueBody;
    }
    /**
     * Set UniqueBody value
     * @param \Ews\StructType\EwsBodyType $uniqueBody
     * @return \Ews\StructType\EwsItemType
     */
    public function setUniqueBody(\Ews\StructType\EwsBodyType $uniqueBody = null)
    {
        $this->UniqueBody = $uniqueBody;
        return $this;
    }
    /**
     * Get Flag value
     * @return \Ews\StructType\EwsFlagType|null
     */
    public function getFlag()
    {
        return $this->Flag;
    }
    /**
     * Set Flag value
     * @param \Ews\StructType\EwsFlagType $flag
     * @return \Ews\StructType\EwsItemType
     */
    public function setFlag(\Ews\StructType\EwsFlagType $flag = null)
    {
        $this->Flag = $flag;
        return $this;
    }
    /**
     * Get StoreEntryId value
     * @return base64Binary|null
     */
    public function getStoreEntryId()
    {
        return $this->StoreEntryId;
    }
    /**
     * Set StoreEntryId value
     * @param base64Binary $storeEntryId
     * @return \Ews\StructType\EwsItemType
     */
    public function setStoreEntryId(base64Binary $storeEntryId = null)
    {
        $this->StoreEntryId = $storeEntryId;
        return $this;
    }
    /**
     * Get InstanceKey value
     * @return base64Binary|null
     */
    public function getInstanceKey()
    {
        return $this->InstanceKey;
    }
    /**
     * Set InstanceKey value
     * @param base64Binary $instanceKey
     * @return \Ews\StructType\EwsItemType
     */
    public function setInstanceKey(base64Binary $instanceKey = null)
    {
        $this->InstanceKey = $instanceKey;
        return $this;
    }
    /**
     * Get NormalizedBody value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getNormalizedBody()
    {
        return $this->NormalizedBody;
    }
    /**
     * Set NormalizedBody value
     * @param \Ews\StructType\EwsBodyType $normalizedBody
     * @return \Ews\StructType\EwsItemType
     */
    public function setNormalizedBody(\Ews\StructType\EwsBodyType $normalizedBody = null)
    {
        $this->NormalizedBody = $normalizedBody;
        return $this;
    }
    /**
     * Get EntityExtractionResult value
     * @return \Ews\StructType\EwsEntityExtractionResultType|null
     */
    public function getEntityExtractionResult()
    {
        return $this->EntityExtractionResult;
    }
    /**
     * Set EntityExtractionResult value
     * @param \Ews\StructType\EwsEntityExtractionResultType $entityExtractionResult
     * @return \Ews\StructType\EwsItemType
     */
    public function setEntityExtractionResult(\Ews\StructType\EwsEntityExtractionResultType $entityExtractionResult = null)
    {
        $this->EntityExtractionResult = $entityExtractionResult;
        return $this;
    }
    /**
     * Get PolicyTag value
     * @return \Ews\StructType\EwsRetentionTagType|null
     */
    public function getPolicyTag()
    {
        return $this->PolicyTag;
    }
    /**
     * Set PolicyTag value
     * @param \Ews\StructType\EwsRetentionTagType $policyTag
     * @return \Ews\StructType\EwsItemType
     */
    public function setPolicyTag(\Ews\StructType\EwsRetentionTagType $policyTag = null)
    {
        $this->PolicyTag = $policyTag;
        return $this;
    }
    /**
     * Get ArchiveTag value
     * @return \Ews\StructType\EwsRetentionTagType|null
     */
    public function getArchiveTag()
    {
        return $this->ArchiveTag;
    }
    /**
     * Set ArchiveTag value
     * @param \Ews\StructType\EwsRetentionTagType $archiveTag
     * @return \Ews\StructType\EwsItemType
     */
    public function setArchiveTag(\Ews\StructType\EwsRetentionTagType $archiveTag = null)
    {
        $this->ArchiveTag = $archiveTag;
        return $this;
    }
    /**
     * Get RetentionDate value
     * @return dateTime|null
     */
    public function getRetentionDate()
    {
        return $this->RetentionDate;
    }
    /**
     * Set RetentionDate value
     * @param dateTime $retentionDate
     * @return \Ews\StructType\EwsItemType
     */
    public function setRetentionDate($retentionDate = null)
    {
        $this->RetentionDate = $retentionDate;
        return $this;
    }
    /**
     * Get Preview value
     * @return string|null
     */
    public function getPreview()
    {
        return $this->Preview;
    }
    /**
     * Set Preview value
     * @param string $preview
     * @return \Ews\StructType\EwsItemType
     */
    public function setPreview($preview = null)
    {
        $this->Preview = $preview;
        return $this;
    }
    /**
     * Get RightsManagementLicenseData value
     * @return \Ews\StructType\EwsRightsManagementLicenseDataType|null
     */
    public function getRightsManagementLicenseData()
    {
        return $this->RightsManagementLicenseData;
    }
    /**
     * Set RightsManagementLicenseData value
     * @param \Ews\StructType\EwsRightsManagementLicenseDataType
     * $rightsManagementLicenseData
     * @return \Ews\StructType\EwsItemType
     */
    public function setRightsManagementLicenseData(\Ews\StructType\EwsRightsManagementLicenseDataType $rightsManagementLicenseData = null)
    {
        $this->RightsManagementLicenseData = $rightsManagementLicenseData;
        return $this;
    }
    /**
     * Get PredictedActionReasons value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType|null
     */
    public function getPredictedActionReasons()
    {
        return $this->PredictedActionReasons;
    }
    /**
     * Set PredictedActionReasons value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     * $predictedActionReasons
     * @return \Ews\StructType\EwsItemType
     */
    public function setPredictedActionReasons(\Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType $predictedActionReasons = null)
    {
        $this->PredictedActionReasons = $predictedActionReasons;
        return $this;
    }
    /**
     * Get IsClutter value
     * @return boolean|null
     */
    public function getIsClutter()
    {
        return $this->IsClutter;
    }
    /**
     * Set IsClutter value
     * @param boolean $isClutter
     * @return \Ews\StructType\EwsItemType
     */
    public function setIsClutter($isClutter = null)
    {
        $this->IsClutter = $isClutter;
        return $this;
    }
    /**
     * Get BlockStatus value
     * @return boolean|null
     */
    public function getBlockStatus()
    {
        return $this->BlockStatus;
    }
    /**
     * Set BlockStatus value
     * @param boolean $blockStatus
     * @return \Ews\StructType\EwsItemType
     */
    public function setBlockStatus($blockStatus = null)
    {
        $this->BlockStatus = $blockStatus;
        return $this;
    }
    /**
     * Get HasBlockedImages value
     * @return boolean|null
     */
    public function getHasBlockedImages()
    {
        return $this->HasBlockedImages;
    }
    /**
     * Set HasBlockedImages value
     * @param boolean $hasBlockedImages
     * @return \Ews\StructType\EwsItemType
     */
    public function setHasBlockedImages($hasBlockedImages = null)
    {
        $this->HasBlockedImages = $hasBlockedImages;
        return $this;
    }
    /**
     * Get TextBody value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getTextBody()
    {
        return $this->TextBody;
    }
    /**
     * Set TextBody value
     * @param \Ews\StructType\EwsBodyType $textBody
     * @return \Ews\StructType\EwsItemType
     */
    public function setTextBody(\Ews\StructType\EwsBodyType $textBody = null)
    {
        $this->TextBody = $textBody;
        return $this;
    }
    /**
     * Get IconIndex value
     * @return string|null
     */
    public function getIconIndex()
    {
        return $this->IconIndex;
    }
    /**
     * Set IconIndex value
     * @uses \Ews\EnumType\EwsIconIndexType::valueIsValid()
     * @uses \Ews\EnumType\EwsIconIndexType::getValidValues()
     * @param string $iconIndex
     * @return \Ews\StructType\EwsItemType
     */
    public function setIconIndex($iconIndex = null)
    {
        if (!\Ews\EnumType\EwsIconIndexType::valueIsValid($iconIndex)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iconIndex, implode(', ', \Ews\EnumType\EwsIconIndexType::getValidValues())), __LINE__);
        }
        $this->IconIndex = $iconIndex;
        return $this;
    }
    /**
     * Get SearchKey value
     * @return base64Binary|null
     */
    public function getSearchKey()
    {
        return $this->SearchKey;
    }
    /**
     * Set SearchKey value
     * @param base64Binary $searchKey
     * @return \Ews\StructType\EwsItemType
     */
    public function setSearchKey(base64Binary $searchKey = null)
    {
        $this->SearchKey = $searchKey;
        return $this;
    }
    /**
     * Get SortKey value
     * @return long|null
     */
    public function getSortKey()
    {
        return $this->SortKey;
    }
    /**
     * Set SortKey value
     * @param long $sortKey
     * @return \Ews\StructType\EwsItemType
     */
    public function setSortKey($sortKey = null)
    {
        $this->SortKey = $sortKey;
        return $this;
    }
    /**
     * Get Hashtags value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getHashtags()
    {
        return $this->Hashtags;
    }
    /**
     * Set Hashtags value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $hashtags
     * @return \Ews\StructType\EwsItemType
     */
    public function setHashtags(\Ews\ArrayType\EwsArrayOfStringsType $hashtags = null)
    {
        $this->Hashtags = $hashtags;
        return $this;
    }
    /**
     * Get Mentions value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getMentions()
    {
        return $this->Mentions;
    }
    /**
     * Set Mentions value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $mentions
     * @return \Ews\StructType\EwsItemType
     */
    public function setMentions(\Ews\ArrayType\EwsArrayOfRecipientsType $mentions = null)
    {
        $this->Mentions = $mentions;
        return $this;
    }
    /**
     * Get MentionedMe value
     * @return boolean|null
     */
    public function getMentionedMe()
    {
        return $this->MentionedMe;
    }
    /**
     * Set MentionedMe value
     * @param boolean $mentionedMe
     * @return \Ews\StructType\EwsItemType
     */
    public function setMentionedMe($mentionedMe = null)
    {
        $this->MentionedMe = $mentionedMe;
        return $this;
    }
    /**
     * Get PendingSocialActivityTagIds value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getPendingSocialActivityTagIds()
    {
        return $this->PendingSocialActivityTagIds;
    }
    /**
     * Set PendingSocialActivityTagIds value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds
     * @return \Ews\StructType\EwsItemType
     */
    public function setPendingSocialActivityTagIds(\Ews\ArrayType\EwsArrayOfStringsType $pendingSocialActivityTagIds = null)
    {
        $this->PendingSocialActivityTagIds = $pendingSocialActivityTagIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsItemType
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