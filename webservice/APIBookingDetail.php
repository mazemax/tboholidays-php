<?php

class APIBookingDetail
{

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var HotelInfoHotelRating $Rating
     */
    protected $Rating = null;

    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $AddressLine2
     */
    protected $AddressLine2 = null;

    /**
     * @var string $Map
     */
    protected $Map = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var date $CheckInDate
     */
    protected $CheckInDate = null;

    /**
     * @var date $CheckOutDate
     */
    protected $CheckOutDate = null;

    /**
     * @var date $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var CancelPolicies $HotelCancelPolicies
     */
    protected $HotelCancelPolicies = null;

    /**
     * @var string $HotelPolicyDetails
     */
    protected $HotelPolicyDetails = null;

    /**
     * @var string $FlightInfo
     */
    protected $FlightInfo = null;

    /**
     * @var string $SpecialRequest
     */
    protected $SpecialRequest = null;

    /**
     * @var ArrayOfRoomDetails $Roomtype
     */
    protected $Roomtype = null;

    /**
     * @var AmendmentDetails $AmendmentDetails
     */
    protected $AmendmentDetails = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var int $NoOfRooms
     */
    protected $NoOfRooms = null;

    /**
     * @var AgencyDetails $AgencyDetails
     */
    protected $AgencyDetails = null;

    /**
     * @var AOTNumbers $AOTNumbers
     */
    protected $AOTNumbers = null;

    /**
     * @var int $BookingId
     */
    protected $BookingId = null;

    /**
     * @var boolean $VoucherStatus
     */
    protected $VoucherStatus = null;

    /**
     * @var APIHotelBookingStatus $BookingStatus
     */
    protected $BookingStatus = null;

    /**
     * @var string $ConfirmationNo
     */
    protected $ConfirmationNo = null;

    /**
     * @var string $SupplierReferenceNo
     */
    protected $SupplierReferenceNo = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $HotelConfirmationNo
     */
    protected $HotelConfirmationNo = null;

    /**
     * @param HotelInfoHotelRating $Rating
     * @param date $CheckInDate
     * @param date $CheckOutDate
     * @param date $BookingDate
     * @param int $NoOfRooms
     * @param int $BookingId
     * @param boolean $VoucherStatus
     * @param APIHotelBookingStatus $BookingStatus
     * @param string $ConfirmationNo
     * @param string $SupplierReferenceNo
     * @param string $InvoiceNumber
     * @param string $HotelConfirmationNo
     */
    public function __construct($Rating, $CheckInDate, $CheckOutDate, $BookingDate, $NoOfRooms, $BookingId, $VoucherStatus, $BookingStatus, $ConfirmationNo, $SupplierReferenceNo, $InvoiceNumber, $HotelConfirmationNo)
    {
      $this->Rating = $Rating;
      $this->CheckInDate = $CheckInDate;
      $this->CheckOutDate = $CheckOutDate;
      $this->BookingDate = $BookingDate;
      $this->NoOfRooms = $NoOfRooms;
      $this->BookingId = $BookingId;
      $this->VoucherStatus = $VoucherStatus;
      $this->BookingStatus = $BookingStatus;
      $this->ConfirmationNo = $ConfirmationNo;
      $this->SupplierReferenceNo = $SupplierReferenceNo;
      $this->InvoiceNumber = $InvoiceNumber;
      $this->HotelConfirmationNo = $HotelConfirmationNo;
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
     * @return APIBookingDetail
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return HotelInfoHotelRating
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param HotelInfoHotelRating $Rating
     * @return APIBookingDetail
     */
    public function setRating($Rating)
    {
      $this->Rating = $Rating;
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
     * @return APIBookingDetail
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
     * @return APIBookingDetail
     */
    public function setAddressLine2($AddressLine2)
    {
      $this->AddressLine2 = $AddressLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getMap()
    {
      return $this->Map;
    }

    /**
     * @param string $Map
     * @return APIBookingDetail
     */
    public function setMap($Map)
    {
      $this->Map = $Map;
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
     * @return APIBookingDetail
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return date
     */
    public function getCheckInDate()
    {
      return $this->CheckInDate;
    }

    /**
     * @param date $CheckInDate
     * @return APIBookingDetail
     */
    public function setCheckInDate($CheckInDate)
    {
      $this->CheckInDate = $CheckInDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getCheckOutDate()
    {
      return $this->CheckOutDate;
    }

    /**
     * @param date $CheckOutDate
     * @return APIBookingDetail
     */
    public function setCheckOutDate($CheckOutDate)
    {
      $this->CheckOutDate = $CheckOutDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getBookingDate()
    {
      return $this->BookingDate;
    }

    /**
     * @param date $BookingDate
     * @return APIBookingDetail
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

    /**
     * @return CancelPolicies
     */
    public function getHotelCancelPolicies()
    {
      return $this->HotelCancelPolicies;
    }

    /**
     * @param CancelPolicies $HotelCancelPolicies
     * @return APIBookingDetail
     */
    public function setHotelCancelPolicies($HotelCancelPolicies)
    {
      $this->HotelCancelPolicies = $HotelCancelPolicies;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelPolicyDetails()
    {
      return $this->HotelPolicyDetails;
    }

    /**
     * @param string $HotelPolicyDetails
     * @return APIBookingDetail
     */
    public function setHotelPolicyDetails($HotelPolicyDetails)
    {
      $this->HotelPolicyDetails = $HotelPolicyDetails;
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
     * @return APIBookingDetail
     */
    public function setFlightInfo($FlightInfo)
    {
      $this->FlightInfo = $FlightInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialRequest()
    {
      return $this->SpecialRequest;
    }

    /**
     * @param string $SpecialRequest
     * @return APIBookingDetail
     */
    public function setSpecialRequest($SpecialRequest)
    {
      $this->SpecialRequest = $SpecialRequest;
      return $this;
    }

    /**
     * @return ArrayOfRoomDetails
     */
    public function getRoomtype()
    {
      return $this->Roomtype;
    }

    /**
     * @param ArrayOfRoomDetails $Roomtype
     * @return APIBookingDetail
     */
    public function setRoomtype($Roomtype)
    {
      $this->Roomtype = $Roomtype;
      return $this;
    }

    /**
     * @return AmendmentDetails
     */
    public function getAmendmentDetails()
    {
      return $this->AmendmentDetails;
    }

    /**
     * @param AmendmentDetails $AmendmentDetails
     * @return APIBookingDetail
     */
    public function setAmendmentDetails($AmendmentDetails)
    {
      $this->AmendmentDetails = $AmendmentDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return APIBookingDetail
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return APIBookingDetail
     */
    public function setNoOfRooms($NoOfRooms)
    {
      $this->NoOfRooms = $NoOfRooms;
      return $this;
    }

    /**
     * @return AgencyDetails
     */
    public function getAgencyDetails()
    {
      return $this->AgencyDetails;
    }

    /**
     * @param AgencyDetails $AgencyDetails
     * @return APIBookingDetail
     */
    public function setAgencyDetails($AgencyDetails)
    {
      $this->AgencyDetails = $AgencyDetails;
      return $this;
    }

    /**
     * @return AOTNumbers
     */
    public function getAOTNumbers()
    {
      return $this->AOTNumbers;
    }

    /**
     * @param AOTNumbers $AOTNumbers
     * @return APIBookingDetail
     */
    public function setAOTNumbers($AOTNumbers)
    {
      $this->AOTNumbers = $AOTNumbers;
      return $this;
    }

    /**
     * @return int
     */
    public function getBookingId()
    {
      return $this->BookingId;
    }

    /**
     * @param int $BookingId
     * @return APIBookingDetail
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVoucherStatus()
    {
      return $this->VoucherStatus;
    }

    /**
     * @param boolean $VoucherStatus
     * @return APIBookingDetail
     */
    public function setVoucherStatus($VoucherStatus)
    {
      $this->VoucherStatus = $VoucherStatus;
      return $this;
    }

    /**
     * @return APIHotelBookingStatus
     */
    public function getBookingStatus()
    {
      return $this->BookingStatus;
    }

    /**
     * @param APIHotelBookingStatus $BookingStatus
     * @return APIBookingDetail
     */
    public function setBookingStatus($BookingStatus)
    {
      $this->BookingStatus = $BookingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationNo()
    {
      return $this->ConfirmationNo;
    }

    /**
     * @param string $ConfirmationNo
     * @return APIBookingDetail
     */
    public function setConfirmationNo($ConfirmationNo)
    {
      $this->ConfirmationNo = $ConfirmationNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierReferenceNo()
    {
      return $this->SupplierReferenceNo;
    }

    /**
     * @param string $SupplierReferenceNo
     * @return APIBookingDetail
     */
    public function setSupplierReferenceNo($SupplierReferenceNo)
    {
      $this->SupplierReferenceNo = $SupplierReferenceNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return APIBookingDetail
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelConfirmationNo()
    {
      return $this->HotelConfirmationNo;
    }

    /**
     * @param string $HotelConfirmationNo
     * @return APIBookingDetail
     */
    public function setHotelConfirmationNo($HotelConfirmationNo)
    {
      $this->HotelConfirmationNo = $HotelConfirmationNo;
      return $this;
    }

}
