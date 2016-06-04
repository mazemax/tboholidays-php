<?php

class HotelCancelResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var int $BookingId
     */
    protected $BookingId = null;

    /**
     * @var float $CancellationCharge
     */
    protected $CancellationCharge = null;

    /**
     * @var float $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var HotelCancelStatus $RequestStatus
     */
    protected $RequestStatus = null;

    /**
     * @param ResponseStatus $Status
     * @param int $BookingId
     * @param float $CancellationCharge
     * @param float $RefundAmount
     * @param HotelCancelStatus $RequestStatus
     */
    public function __construct($Status, $BookingId, $CancellationCharge, $RefundAmount, $RequestStatus)
    {
      $this->Status = $Status;
      $this->BookingId = $BookingId;
      $this->CancellationCharge = $CancellationCharge;
      $this->RefundAmount = $RefundAmount;
      $this->RequestStatus = $RequestStatus;
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
     * @return HotelCancelResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return HotelCancelResponse
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return float
     */
    public function getCancellationCharge()
    {
      return $this->CancellationCharge;
    }

    /**
     * @param float $CancellationCharge
     * @return HotelCancelResponse
     */
    public function setCancellationCharge($CancellationCharge)
    {
      $this->CancellationCharge = $CancellationCharge;
      return $this;
    }

    /**
     * @return float
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param float $RefundAmount
     * @return HotelCancelResponse
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return HotelCancelStatus
     */
    public function getRequestStatus()
    {
      return $this->RequestStatus;
    }

    /**
     * @param HotelCancelStatus $RequestStatus
     * @return HotelCancelResponse
     */
    public function setRequestStatus($RequestStatus)
    {
      $this->RequestStatus = $RequestStatus;
      return $this;
    }

}
