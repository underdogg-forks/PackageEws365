<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaPostalAddressType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPersonaPostalAddressType extends AbstractStructBase
{
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Street;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The PostOfficeBox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostOfficeBox;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Latitude
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Longitude;
    /**
     * The Accuracy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Accuracy;
    /**
     * The Altitude
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Altitude;
    /**
     * The AltitudeAccuracy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $AltitudeAccuracy;
    /**
     * The FormattedAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FormattedAddress;
    /**
     * The LocationUri
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LocationUri;
    /**
     * The LocationSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LocationSource;
    /**
     * Constructor method for PersonaPostalAddressType
     * @uses EwsPersonaPostalAddressType::setStreet()
     * @uses EwsPersonaPostalAddressType::setCity()
     * @uses EwsPersonaPostalAddressType::setState()
     * @uses EwsPersonaPostalAddressType::setCountry()
     * @uses EwsPersonaPostalAddressType::setPostalCode()
     * @uses EwsPersonaPostalAddressType::setPostOfficeBox()
     * @uses EwsPersonaPostalAddressType::setType()
     * @uses EwsPersonaPostalAddressType::setLatitude()
     * @uses EwsPersonaPostalAddressType::setLongitude()
     * @uses EwsPersonaPostalAddressType::setAccuracy()
     * @uses EwsPersonaPostalAddressType::setAltitude()
     * @uses EwsPersonaPostalAddressType::setAltitudeAccuracy()
     * @uses EwsPersonaPostalAddressType::setFormattedAddress()
     * @uses EwsPersonaPostalAddressType::setLocationUri()
     * @uses EwsPersonaPostalAddressType::setLocationSource()
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $country
     * @param string $postalCode
     * @param string $postOfficeBox
     * @param string $type
     * @param float $latitude
     * @param float $longitude
     * @param float $accuracy
     * @param float $altitude
     * @param float $altitudeAccuracy
     * @param string $formattedAddress
     * @param string $locationUri
     * @param string $locationSource
     */
    public function __construct($street = null, $city = null, $state = null, $country = null, $postalCode = null, $postOfficeBox = null, $type = null, $latitude = null, $longitude = null, $accuracy = null, $altitude = null, $altitudeAccuracy = null, $formattedAddress = null, $locationUri = null, $locationSource = null)
    {
        $this
            ->setStreet($street)
            ->setCity($city)
            ->setState($state)
            ->setCountry($country)
            ->setPostalCode($postalCode)
            ->setPostOfficeBox($postOfficeBox)
            ->setType($type)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setAccuracy($accuracy)
            ->setAltitude($altitude)
            ->setAltitudeAccuracy($altitudeAccuracy)
            ->setFormattedAddress($formattedAddress)
            ->setLocationUri($locationUri)
            ->setLocationSource($locationSource);
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get PostOfficeBox value
     * @return string|null
     */
    public function getPostOfficeBox()
    {
        return $this->PostOfficeBox;
    }
    /**
     * Set PostOfficeBox value
     * @param string $postOfficeBox
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setPostOfficeBox($postOfficeBox = null)
    {
        // validation for constraint: string
        if (!is_null($postOfficeBox) && !is_string($postOfficeBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postOfficeBox)), __LINE__);
        }
        $this->PostOfficeBox = $postOfficeBox;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param float $latitude
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setLatitude($latitude = null)
    {
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param float $longitude
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setLongitude($longitude = null)
    {
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Get Accuracy value
     * @return float|null
     */
    public function getAccuracy()
    {
        return $this->Accuracy;
    }
    /**
     * Set Accuracy value
     * @param float $accuracy
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setAccuracy($accuracy = null)
    {
        $this->Accuracy = $accuracy;
        return $this;
    }
    /**
     * Get Altitude value
     * @return float|null
     */
    public function getAltitude()
    {
        return $this->Altitude;
    }
    /**
     * Set Altitude value
     * @param float $altitude
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setAltitude($altitude = null)
    {
        $this->Altitude = $altitude;
        return $this;
    }
    /**
     * Get AltitudeAccuracy value
     * @return float|null
     */
    public function getAltitudeAccuracy()
    {
        return $this->AltitudeAccuracy;
    }
    /**
     * Set AltitudeAccuracy value
     * @param float $altitudeAccuracy
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setAltitudeAccuracy($altitudeAccuracy = null)
    {
        $this->AltitudeAccuracy = $altitudeAccuracy;
        return $this;
    }
    /**
     * Get FormattedAddress value
     * @return string|null
     */
    public function getFormattedAddress()
    {
        return $this->FormattedAddress;
    }
    /**
     * Set FormattedAddress value
     * @param string $formattedAddress
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setFormattedAddress($formattedAddress = null)
    {
        // validation for constraint: string
        if (!is_null($formattedAddress) && !is_string($formattedAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formattedAddress)), __LINE__);
        }
        $this->FormattedAddress = $formattedAddress;
        return $this;
    }
    /**
     * Get LocationUri value
     * @return string|null
     */
    public function getLocationUri()
    {
        return $this->LocationUri;
    }
    /**
     * Set LocationUri value
     * @param string $locationUri
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setLocationUri($locationUri = null)
    {
        // validation for constraint: string
        if (!is_null($locationUri) && !is_string($locationUri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationUri)), __LINE__);
        }
        $this->LocationUri = $locationUri;
        return $this;
    }
    /**
     * Get LocationSource value
     * @return string|null
     */
    public function getLocationSource()
    {
        return $this->LocationSource;
    }
    /**
     * Set LocationSource value
     * @uses \Ews\EnumType\EwsLocationSourceType::valueIsValid()
     * @uses \Ews\EnumType\EwsLocationSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $locationSource
     * @return \Ews\StructType\EwsPersonaPostalAddressType
     */
    public function setLocationSource($locationSource = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsLocationSourceType::valueIsValid($locationSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $locationSource, implode(', ', \Ews\EnumType\EwsLocationSourceType::getValidValues())), __LINE__);
        }
        $this->LocationSource = $locationSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPersonaPostalAddressType
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
