<?php

class HotelRoomAvailabilityResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var ArrayOfHotel_Room $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var BookingOptions $OptionsForBooking
     */
    protected $OptionsForBooking = null;

    /**
     * @param ResponseStatus $Status
     * @param int $ResultIndex
     * @param ArrayOfHotel_Room $HotelRooms
     * @param BookingOptions $OptionsForBooking
     */
    public function __construct($Status, $ResultIndex, $HotelRooms, $OptionsForBooking)
    {
      $this->Status = $Status;
      $this->ResultIndex = $ResultIndex;
      $this->HotelRooms = $HotelRooms;
      $this->OptionsForBooking = $OptionsForBooking;
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
     * @return HotelRoomAvailabilityResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return HotelRoomAvailabilityResponse
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
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
     * @return HotelRoomAvailabilityResponse
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
     * @return HotelRoomAvailabilityResponse
     */
    public function setOptionsForBooking($OptionsForBooking)
    {
      $this->OptionsForBooking = $OptionsForBooking;
      return $this;
    }

}
