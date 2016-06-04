<?php

class HotelDetailsResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var APIHotelDetails $HotelDetails
     */
    protected $HotelDetails = null;

    /**
     * @param ResponseStatus $Status
     * @param APIHotelDetails $HotelDetails
     */
    public function __construct($Status, $HotelDetails)
    {
      $this->Status = $Status;
      $this->HotelDetails = $HotelDetails;
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
     * @return HotelDetailsResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return APIHotelDetails
     */
    public function getHotelDetails()
    {
      return $this->HotelDetails;
    }

    /**
     * @param APIHotelDetails $HotelDetails
     * @return HotelDetailsResponse
     */
    public function setHotelDetails($HotelDetails)
    {
      $this->HotelDetails = $HotelDetails;
      return $this;
    }

}
