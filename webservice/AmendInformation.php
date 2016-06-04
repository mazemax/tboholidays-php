<?php

class AmendInformation
{

    /**
     * @var CheckInReq $CheckIn
     */
    protected $CheckIn = null;

    /**
     * @var CheckOutReq $CheckOut
     */
    protected $CheckOut = null;

    /**
     * @var ArrayOfRoomReq $Rooms
     */
    protected $Rooms = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CheckInReq
     */
    public function getCheckIn()
    {
      return $this->CheckIn;
    }

    /**
     * @param CheckInReq $CheckIn
     * @return AmendInformation
     */
    public function setCheckIn($CheckIn)
    {
      $this->CheckIn = $CheckIn;
      return $this;
    }

    /**
     * @return CheckOutReq
     */
    public function getCheckOut()
    {
      return $this->CheckOut;
    }

    /**
     * @param CheckOutReq $CheckOut
     * @return AmendInformation
     */
    public function setCheckOut($CheckOut)
    {
      $this->CheckOut = $CheckOut;
      return $this;
    }

    /**
     * @return ArrayOfRoomReq
     */
    public function getRooms()
    {
      return $this->Rooms;
    }

    /**
     * @param ArrayOfRoomReq $Rooms
     * @return AmendInformation
     */
    public function setRooms($Rooms)
    {
      $this->Rooms = $Rooms;
      return $this;
    }

}
