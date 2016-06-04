<?php

class PriceVerification
{

    /**
     * @var ArrayOfHotel_Room $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var PriceVerificationStatus $Status
     */
    protected $Status = null;

    /**
     * @var boolean $PriceChanged
     */
    protected $PriceChanged = null;

    /**
     * @var boolean $AvailableOnNewPrice
     */
    protected $AvailableOnNewPrice = null;

    /**
     * @param PriceVerificationStatus $Status
     * @param boolean $PriceChanged
     * @param boolean $AvailableOnNewPrice
     */
    public function __construct($Status, $PriceChanged, $AvailableOnNewPrice)
    {
      $this->Status = $Status;
      $this->PriceChanged = $PriceChanged;
      $this->AvailableOnNewPrice = $AvailableOnNewPrice;
    }

    /**
     * @return ArrayOfHotel_Room
     */
    public function getHotelRooms()
    {
      return $this->HotelRooms;
    }

    /**
     * @param ArrayOfHotel_Room $HotelRooms
     * @return PriceVerification
     */
    public function setHotelRooms($HotelRooms)
    {
      $this->HotelRooms = $HotelRooms;
      return $this;
    }

    /**
     * @return PriceVerificationStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PriceVerificationStatus $Status
     * @return PriceVerification
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPriceChanged()
    {
      return $this->PriceChanged;
    }

    /**
     * @param boolean $PriceChanged
     * @return PriceVerification
     */
    public function setPriceChanged($PriceChanged)
    {
      $this->PriceChanged = $PriceChanged;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableOnNewPrice()
    {
      return $this->AvailableOnNewPrice;
    }

    /**
     * @param boolean $AvailableOnNewPrice
     * @return PriceVerification
     */
    public function setAvailableOnNewPrice($AvailableOnNewPrice)
    {
      $this->AvailableOnNewPrice = $AvailableOnNewPrice;
      return $this;
    }

}
