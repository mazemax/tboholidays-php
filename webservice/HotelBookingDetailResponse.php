<?php

class HotelBookingDetailResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var APIBookingDetail $BookingDetail
     */
    protected $BookingDetail = null;

    /**
     * @param ResponseStatus $Status
     * @param APIBookingDetail $BookingDetail
     */
    public function __construct($Status, $BookingDetail)
    {
      $this->Status = $Status;
      $this->BookingDetail = $BookingDetail;
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
     * @return HotelBookingDetailResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return APIBookingDetail
     */
    public function getBookingDetail()
    {
      return $this->BookingDetail;
    }

    /**
     * @param APIBookingDetail $BookingDetail
     * @return HotelBookingDetailResponse
     */
    public function setBookingDetail($BookingDetail)
    {
      $this->BookingDetail = $BookingDetail;
      return $this;
    }

}
