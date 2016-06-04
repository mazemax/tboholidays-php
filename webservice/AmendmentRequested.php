<?php

class AmendmentRequested
{

    /**
     * @var CheckInRes $CheckIn
     */
    protected $CheckIn = null;

    /**
     * @var CheckOutRes $CheckOut
     */
    protected $CheckOut = null;

    /**
     * @var ArrayOfRoomRes $Rooms
     */
    protected $Rooms = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CheckInRes
     */
    public function getCheckIn()
    {
      return $this->CheckIn;
    }

    /**
     * @param CheckInRes $CheckIn
     * @return AmendmentRequested
     */
    public function setCheckIn($CheckIn)
    {
      $this->CheckIn = $CheckIn;
      return $this;
    }

    /**
     * @return CheckOutRes
     */
    public function getCheckOut()
    {
      return $this->CheckOut;
    }

    /**
     * @param CheckOutRes $CheckOut
     * @return AmendmentRequested
     */
    public function setCheckOut($CheckOut)
    {
      $this->CheckOut = $CheckOut;
      return $this;
    }

    /**
     * @return ArrayOfRoomRes
     */
    public function getRooms()
    {
      return $this->Rooms;
    }

    /**
     * @param ArrayOfRoomRes $Rooms
     * @return AmendmentRequested
     */
    public function setRooms($Rooms)
    {
      $this->Rooms = $Rooms;
      return $this;
    }

}
