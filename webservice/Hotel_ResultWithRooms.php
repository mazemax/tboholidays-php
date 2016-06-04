<?php

class Hotel_ResultWithRooms
{

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var HotelInfo $HotelInfo
     */
    protected $HotelInfo = null;

    /**
     * @var MinHotelPrice $MinHotelPrice
     */
    protected $MinHotelPrice = null;

    /**
     * @var ArrayOfHotel_Room $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var BookingOptions $OptionsForBooking
     */
    protected $OptionsForBooking = null;

    /**
     * @var boolean $MoreRoomsAvailable
     */
    protected $MoreRoomsAvailable = null;

    /**
     * @var boolean $IsPkgProperty
     */
    protected $IsPkgProperty = null;

    /**
     * @param int $ResultIndex
     * @param boolean $MoreRoomsAvailable
     * @param boolean $IsPkgProperty
     */
    public function __construct($ResultIndex, $MoreRoomsAvailable, $IsPkgProperty)
    {
      $this->ResultIndex = $ResultIndex;
      $this->MoreRoomsAvailable = $MoreRoomsAvailable;
      $this->IsPkgProperty = $IsPkgProperty;
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
     * @return Hotel_ResultWithRooms
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
    }

    /**
     * @return HotelInfo
     */
    public function getHotelInfo()
    {
      return $this->HotelInfo;
    }

    /**
     * @param HotelInfo $HotelInfo
     * @return Hotel_ResultWithRooms
     */
    public function setHotelInfo($HotelInfo)
    {
      $this->HotelInfo = $HotelInfo;
      return $this;
    }

    /**
     * @return MinHotelPrice
     */
    public function getMinHotelPrice()
    {
      return $this->MinHotelPrice;
    }

    /**
     * @param MinHotelPrice $MinHotelPrice
     * @return Hotel_ResultWithRooms
     */
    public function setMinHotelPrice($MinHotelPrice)
    {
      $this->MinHotelPrice = $MinHotelPrice;
      return $this;
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
     * @return Hotel_ResultWithRooms
     */
    public function setHotelRooms($HotelRooms)
    {
      $this->HotelRooms = $HotelRooms;
      return $this;
    }

    /**
     * @return BookingOptions
     */
    public function getOptionsForBooking()
    {
      return $this->OptionsForBooking;
    }

    /**
     * @param BookingOptions $OptionsForBooking
     * @return Hotel_ResultWithRooms
     */
    public function setOptionsForBooking($OptionsForBooking)
    {
      $this->OptionsForBooking = $OptionsForBooking;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreRoomsAvailable()
    {
      return $this->MoreRoomsAvailable;
    }

    /**
     * @param boolean $MoreRoomsAvailable
     * @return Hotel_ResultWithRooms
     */
    public function setMoreRoomsAvailable($MoreRoomsAvailable)
    {
      $this->MoreRoomsAvailable = $MoreRoomsAvailable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPkgProperty()
    {
      return $this->IsPkgProperty;
    }

    /**
     * @param boolean $IsPkgProperty
     * @return Hotel_ResultWithRooms
     */
    public function setIsPkgProperty($IsPkgProperty)
    {
      $this->IsPkgProperty = $IsPkgProperty;
      return $this;
    }

}
