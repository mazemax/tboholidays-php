<?php

class AgencyDetails
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $AddressLine2
     */
    protected $AddressLine2 = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $PIN
     */
    protected $PIN = null;

    /**
     * @var string $OfficeId
     */
    protected $OfficeId = null;

    /**
     * @var string $BookingMemberName
     */
    protected $BookingMemberName = null;

    /**
     * @var string $AgencyReference
     */
    protected $AgencyReference = null;

    /**
     * @param string $AgencyReference
     */
    public function __construct($AgencyReference)
    {
      $this->AgencyReference = $AgencyReference;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return AgencyDetails
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
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
     * @return AgencyDetails
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
     * @return AgencyDetails
     */
    public function setAddressLine2($AddressLine2)
    {
      $this->AddressLine2 = $AddressLine2;
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
     * @return AgencyDetails
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return AgencyDetails
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return AgencyDetails
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
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
     * @return AgencyDetails
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getPIN()
    {
      return $this->PIN;
    }

    /**
     * @param string $PIN
     * @return AgencyDetails
     */
    public function setPIN($PIN)
    {
      $this->PIN = $PIN;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfficeId()
    {
      return $this->OfficeId;
    }

    /**
     * @param string $OfficeId
     * @return AgencyDetails
     */
    public function setOfficeId($OfficeId)
    {
      $this->OfficeId = $OfficeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingMemberName()
    {
      return $this->BookingMemberName;
    }

    /**
     * @param string $BookingMemberName
     * @return AgencyDetails
     */
    public function setBookingMemberName($BookingMemberName)
    {
      $this->BookingMemberName = $BookingMemberName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyReference()
    {
      return $this->AgencyReference;
    }

    /**
     * @param string $AgencyReference
     * @return AgencyDetails
     */
    public function setAgencyReference($AgencyReference)
    {
      $this->AgencyReference = $AgencyReference;
      return $this;
    }

}
