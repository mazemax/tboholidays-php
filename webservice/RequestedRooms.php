<?php

class RequestedRooms
{

    /**
     * @var int $RoomIndex
     */
    protected $RoomIndex = null;

    /**
     * @var string $RoomTypeName
     */
    protected $RoomTypeName = null;

    /**
     * @var string $RoomTypeCode
     */
    protected $RoomTypeCode = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var Rate $RoomRate
     */
    protected $RoomRate = null;

    /**
     * @var ArrayOfSuppInfo $Supplements
     */
    protected $Supplements = null;

    /**
     * @param int $RoomIndex
     */
    public function __construct($RoomIndex)
    {
      $this->RoomIndex = $RoomIndex;
    }

    /**
     * @return int
     */
    public function getRoomIndex()
    {
      return $this->RoomIndex;
    }

    /**
     * @param int $RoomIndex
     * @return RequestedRooms
     */
    public function setRoomIndex($RoomIndex)
    {
      $this->RoomIndex = $RoomIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
      return $this->RoomTypeName;
    }

    /**
     * @param string $RoomTypeName
     * @return RequestedRooms
     */
    public function setRoomTypeName($RoomTypeName)
    {
      $this->RoomTypeName = $RoomTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeCode()
    {
      return $this->RoomTypeCode;
    }

    /**
     * @param string $RoomTypeCode
     * @return RequestedRooms
     */
    public function setRoomTypeCode($RoomTypeCode)
    {
      $this->RoomTypeCode = $RoomTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return RequestedRooms
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

    /**
     * @return Rate
     */
    public function getRoomRate()
    {
      return $this->RoomRate;
    }

    /**
     * @param Rate $RoomRate
     * @return RequestedRooms
     */
    public function setRoomRate($RoomRate)
    {
      $this->RoomRate = $RoomRate;
      return $this;
    }

    /**
     * @return ArrayOfSuppInfo
     */
    public function getSupplements()
    {
      return $this->Supplements;
    }

    /**
     * @param ArrayOfSuppInfo $Supplements
     * @return RequestedRooms
     */
    public function setSupplements($Supplements)
    {
      $this->Supplements = $Supplements;
      return $this;
    }

}
