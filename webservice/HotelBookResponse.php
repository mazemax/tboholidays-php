<?php

class HotelBookResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var APIHotelBookingStatus $BookingStatus
     */
    protected $BookingStatus = null;

    /**
     * @var int $BookingId
     */
    protected $BookingId = null;

    /**
     * @var string $ConfirmationNo
     */
    protected $ConfirmationNo = null;

    /**
     * @var int $TripId
     */
    protected $TripId = null;

    /**
     * @var string $SupplierReferenceNo
     */
    protected $SupplierReferenceNo = null;

    /**
     * @param ResponseStatus $Status
     * @param APIHotelBookingStatus $BookingStatus
     * @param int $BookingId
     * @param string $ConfirmationNo
     * @param int $TripId
     * @param string $SupplierReferenceNo
     */
    public function __construct($Status, $BookingStatus, $BookingId, $ConfirmationNo, $TripId, $SupplierReferenceNo)
    {
      $this->Status = $Status;
      $this->BookingStatus = $BookingStatus;
      $this->BookingId = $BookingId;
      $this->ConfirmationNo = $ConfirmationNo;
      $this->TripId = $TripId;
      $this->SupplierReferenceNo = $SupplierReferenceNo;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ResponseStatus $Status
     * @return HotelBookResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return HotelBookResponse
     */
    public function setBookingStatus($BookingStatus)
    {
      $this->BookingStatus = $BookingStatus;
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
     * @return HotelBookResponse
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
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
     * @return HotelBookResponse
     */
    public function setConfirmationNo($ConfirmationNo)
    {
      $this->ConfirmationNo = $ConfirmationNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getTripId()
    {
      return $this->TripId;
    }

    /**
     * @param int $TripId
     * @return HotelBookResponse
     */
    public function setTripId($TripId)
    {
      $this->TripId = $TripId;
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
     * @return HotelBookResponse
     */
    public function setSupplierReferenceNo($SupplierReferenceNo)
    {
      $this->SupplierReferenceNo = $SupplierReferenceNo;
      return $this;
    }

}
