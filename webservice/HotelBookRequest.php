<?php

class HotelBookRequest
{

    /**
     * @var string $ClientReferenceNumber
     */
    protected $ClientReferenceNumber = null;

    /**
     * @var string $GuestNationality
     */
    protected $GuestNationality = null;

    /**
     * @var ArrayOfGuest $Guests
     */
    protected $Guests = null;

    /**
     * @var AddressInfo $AddressInfo
     */
    protected $AddressInfo = null;

    /**
     * @var PaymentInfo $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var string $SessionId
     */
    protected $SessionId = null;

    /**
     * @var string $FlightInfo
     */
    protected $FlightInfo = null;

    /**
     * @var int $NoOfRooms
     */
    protected $NoOfRooms = null;

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var ArrayOfRequestedRooms $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var ArrayOfSpecialRequest $SpecialRequests
     */
    protected $SpecialRequests = null;

    /**
     * @param string $ClientReferenceNumber
     * @param string $GuestNationality
     * @param ArrayOfGuest $Guests
     * @param AddressInfo $AddressInfo
     * @param PaymentInfo $PaymentInfo
     * @param string $SessionId
     * @param string $FlightInfo
     * @param int $NoOfRooms
     * @param int $ResultIndex
     * @param string $HotelCode
     * @param string $HotelName
     * @param ArrayOfRequestedRooms $HotelRooms
     * @param ArrayOfSpecialRequest $SpecialRequests
     */
    public function __construct($ClientReferenceNumber, $GuestNationality, $Guests, $AddressInfo, $PaymentInfo, $SessionId, $FlightInfo, $NoOfRooms, $ResultIndex, $HotelCode, $HotelName, $HotelRooms, $SpecialRequests)
    {
      $this->ClientReferenceNumber = $ClientReferenceNumber;
      $this->GuestNationality = $GuestNationality;
      $this->Guests = $Guests;
      $this->AddressInfo = $AddressInfo;
      $this->PaymentInfo = $PaymentInfo;
      $this->SessionId = $SessionId;
      $this->FlightInfo = $FlightInfo;
      $this->NoOfRooms = $NoOfRooms;
      $this->ResultIndex = $ResultIndex;
      $this->HotelCode = $HotelCode;
      $this->HotelName = $HotelName;
      $this->HotelRooms = $HotelRooms;
      $this->SpecialRequests = $SpecialRequests;
    }

    /**
     * @return string
     */
    public function getClientReferenceNumber()
    {
      return $this->ClientReferenceNumber;
    }

    /**
     * @param string $ClientReferenceNumber
     * @return HotelBookRequest
     */
    public function setClientReferenceNumber($ClientReferenceNumber)
    {
      $this->ClientReferenceNumber = $ClientReferenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getGuestNationality()
    {
      return $this->GuestNationality;
    }

    /**
     * @param string $GuestNationality
     * @return HotelBookRequest
     */
    public function setGuestNationality($GuestNationality)
    {
      $this->GuestNationality = $GuestNationality;
      return $this;
    }

    /**
     * @return ArrayOfGuest
     */
    public function getGuests()
    {
      return $this->Guests;
    }

    /**
     * @param ArrayOfGuest $Guests
     * @return HotelBookRequest
     */
    public function setGuests($Guests)
    {
      $this->Guests = $Guests;
      return $this;
    }

    /**
     * @return AddressInfo
     */
    public function getAddressInfo()
    {
      return $this->AddressInfo;
    }

    /**
     * @param AddressInfo $AddressInfo
     * @return HotelBookRequest
     */
    public function setAddressInfo($AddressInfo)
    {
      $this->AddressInfo = $AddressInfo;
      return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo $PaymentInfo
     * @return HotelBookRequest
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param string $SessionId
     * @return HotelBookRequest
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlightInfo()
    {
      return $this->FlightInfo;
    }

    /**
     * @param string $FlightInfo
     * @return HotelBookRequest
     */
    public function setFlightInfo($FlightInfo)
    {
      $this->FlightInfo = $FlightInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getNoOfRooms()
    {
      return $this->NoOfRooms;
    }

    /**
     * @param int $NoOfRooms
     * @return HotelBookRequest
     */
    public function setNoOfRooms($NoOfRooms)
    {
      $this->NoOfRooms = $NoOfRooms;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultIndex()
    {
      return $this->ResultIndex;
    }

    /**
     * @param int $ResultIndex
     * @return HotelBookRequest
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return HotelBookRequest
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return HotelBookRequest
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return ArrayOfRequestedRooms
     */
    public function getHotelRooms()
    {
      return $this->HotelRooms;
    }

    /**
     * @param ArrayOfRequestedRooms $HotelRooms
     * @return HotelBookRequest
     */
    public function setHotelRooms($HotelRooms)
    {
      $this->HotelRooms = $HotelRooms;
      return $this;
    }

    /**
     * @return ArrayOfSpecialRequest
     */
    public function getSpecialRequests()
    {
      return $this->SpecialRequests;
    }

    /**
     * @param ArrayOfSpecialRequest $SpecialRequests
     * @return HotelBookRequest
     */
    public function setSpecialRequests($SpecialRequests)
    {
      $this->SpecialRequests = $SpecialRequests;
      return $this;
    }

}
