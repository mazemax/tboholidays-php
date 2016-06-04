<?php

class AddressInfo
{

    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $AddressLine2
     */
    protected $AddressLine2 = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
      return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     * @return AddressInfo
     */
    public function setAddressLine1($AddressLine1)
    {
      $this->AddressLine1 = $AddressLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
      return $this->AddressLine2;
    }

    /**
     * @param string $AddressLine2
     * @return AddressInfo
     */
    public function setAddressLine2($AddressLine2)
    {
      $this->AddressLine2 = $AddressLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return AddressInfo
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param string $AreaCode
     * @return AddressInfo
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNo()
    {
      return $this->PhoneNo;
    }

    /**
     * @param string $PhoneNo
     * @return AddressInfo
     */
    public function setPhoneNo($PhoneNo)
    {
      $this->PhoneNo = $PhoneNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return AddressInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return AddressInfo
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return AddressInfo
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return AddressInfo
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return AddressInfo
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

}
