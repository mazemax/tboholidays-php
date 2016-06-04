<?php

class ApprovalInformation
{

    /**
     * @var ArrayOfRoomPriceRes $Rooms
     */
    protected $Rooms = null;

    /**
     * @var TotalPrice $TotalPrice
     */
    protected $TotalPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRoomPriceRes
     */
    public function getRooms()
    {
      return $this->Rooms;
    }

    /**
     * @param ArrayOfRoomPriceRes $Rooms
     * @return ApprovalInformation
     */
    public function setRooms($Rooms)
    {
      $this->Rooms = $Rooms;
      return $this;
    }

    /**
     * @return TotalPrice
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param TotalPrice $TotalPrice
     * @return ApprovalInformation
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

}
