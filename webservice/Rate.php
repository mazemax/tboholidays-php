<?php

class Rate
{

    /**
     * @var float $RoomFare
     */
    protected $RoomFare = null;

    /**
     * @var float $RoomTax
     */
    protected $RoomTax = null;

    /**
     * @var float $TotalFare
     */
    protected $TotalFare = null;

    /**
     * @param float $RoomFare
     * @param float $RoomTax
     * @param float $TotalFare
     */
    public function __construct($RoomFare, $RoomTax, $TotalFare)
    {
      $this->RoomFare = $RoomFare;
      $this->RoomTax = $RoomTax;
      $this->TotalFare = $TotalFare;
    }

    /**
     * @return float
     */
    public function getRoomFare()
    {
      return $this->RoomFare;
    }

    /**
     * @param float $RoomFare
     * @return Rate
     */
    public function setRoomFare($RoomFare)
    {
      $this->RoomFare = $RoomFare;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoomTax()
    {
      return $this->RoomTax;
    }

    /**
     * @param float $RoomTax
     * @return Rate
     */
    public function setRoomTax($RoomTax)
    {
      $this->RoomTax = $RoomTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalFare()
    {
      return $this->TotalFare;
    }

    /**
     * @param float $TotalFare
     * @return Rate
     */
    public function setTotalFare($TotalFare)
    {
      $this->TotalFare = $TotalFare;
      return $this;
    }

}
