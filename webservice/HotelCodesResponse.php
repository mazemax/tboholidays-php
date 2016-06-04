<?php

class HotelCodesResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfHotels $Hotels
     */
    protected $Hotels = null;

    /**
     * @param ResponseStatus $Status
     * @param ArrayOfHotels $Hotels
     */
    public function __construct($Status, $Hotels)
    {
      $this->Status = $Status;
      $this->Hotels = $Hotels;
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
     * @return HotelCodesResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfHotels
     */
    public function getHotels()
    {
      return $this->Hotels;
    }

    /**
     * @param ArrayOfHotels $Hotels
     * @return HotelCodesResponse
     */
    public function setHotels($Hotels)
    {
      $this->Hotels = $Hotels;
      return $this;
    }

}
