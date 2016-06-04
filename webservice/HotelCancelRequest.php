<?php

class HotelCancelRequest
{

    /**
     * @var int $BookingId
     */
    protected $BookingId = null;

    /**
     * @var CancelRequestType $RequestType
     */
    protected $RequestType = null;

    /**
     * @var string $Remarks
     */
    protected $Remarks = null;

    /**
     * @param int $BookingId
     * @param CancelRequestType $RequestType
     * @param string $Remarks
     */
    public function __construct($BookingId, $RequestType, $Remarks)
    {
      $this->BookingId = $BookingId;
      $this->RequestType = $RequestType;
      $this->Remarks = $Remarks;
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
     * @return HotelCancelRequest
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return CancelRequestType
     */
    public function getRequestType()
    {
      return $this->RequestType;
    }

    /**
     * @param CancelRequestType $RequestType
     * @return HotelCancelRequest
     */
    public function setRequestType($RequestType)
    {
      $this->RequestType = $RequestType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param string $Remarks
     * @return HotelCancelRequest
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

}
