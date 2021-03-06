<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrimaryMailboxSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPrimaryMailboxSearchScopeType extends AbstractStructBase
{
    /**
     * The FolderScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchFolderScopeType
     */
    public $FolderScope;
    /**
     * The IsDeepTraversal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsDeepTraversal;
    /**
     * Constructor method for PrimaryMailboxSearchScopeType
     * @uses EwsPrimaryMailboxSearchScopeType::setFolderScope()
     * @uses EwsPrimaryMailboxSearchScopeType::setIsDeepTraversal()
     * @param \Ews\StructType\EwsSearchFolderScopeType $folderScope
     * @param bool $isDeepTraversal
     */
    public function __construct(\Ews\StructType\EwsSearchFolderScopeType $folderScope = null, $isDeepTraversal = null)
    {
        $this
            ->setFolderScope($folderScope)
            ->setIsDeepTraversal($isDeepTraversal);
    }
    /**
     * Get FolderScope value
     * @return \Ews\StructType\EwsSearchFolderScopeType|null
     */
    public function getFolderScope()
    {
        return $this->FolderScope;
    }
    /**
     * Set FolderScope value
     * @param \Ews\StructType\EwsSearchFolderScopeType $folderScope
     * @return \Ews\StructType\EwsPrimaryMailboxSearchScopeType
     */
    public function setFolderScope(\Ews\StructType\EwsSearchFolderScopeType $folderScope = null)
    {
        $this->FolderScope = $folderScope;
        return $this;
    }
    /**
     * Get IsDeepTraversal value
     * @return bool|null
     */
    public function getIsDeepTraversal()
    {
        return $this->IsDeepTraversal;
    }
    /**
     * Set IsDeepTraversal value
     * @param bool $isDeepTraversal
     * @return \Ews\StructType\EwsPrimaryMailboxSearchScopeType
     */
    public function setIsDeepTraversal($isDeepTraversal = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDeepTraversal) && !is_bool($isDeepTraversal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDeepTraversal)), __LINE__);
        }
        $this->IsDeepTraversal = $isDeepTraversal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPrimaryMailboxSearchScopeType
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
