<?php

class Hotel_Room
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
     * @var string $Inclusion
     */
    protected $Inclusion = null;

    /**
     * @var string $RoomTypeCode
     */
    protected $RoomTypeCode = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var RoomRate $RoomRate
     */
    protected $RoomRate = null;

    /**
     * @var string $RoomPromtion
     */
    protected $RoomPromtion = null;

    /**
     * @var string $RoomInstructions
     */
    protected $RoomInstructions = null;

    /**
     * @var ArrayOfSupplement $Supplements
     */
    protected $Supplements = null;

    /**
     * @var string $RoomEssentialInfo
     */
    protected $RoomEssentialInfo = null;

    /**
     * @var RoomInformation $RoomAdditionalInfo
     */
    protected $RoomAdditionalInfo = null;

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
     * @return Hotel_Room
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
     * @return Hotel_Room
     */
    public function setRoomTypeName($RoomTypeName)
    {
      $this->RoomTypeName = $RoomTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInclusion()
    {
      return $this->Inclusion;
    }

    /**
     * @param string $Inclusion
     * @return Hotel_Room
     */
    public function setInclusion($Inclusion)
    {
      $this->Inclusion = $Inclusion;
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
     * @return Hotel_Room
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
     * @return Hotel_Room
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

    /**
     * @return RoomRate
     */
    public function getRoomRate()
    {
      return $this->RoomRate;
    }

    /**
     * @param RoomRate $RoomRate
     * @return Hotel_Room
     */
    public function setRoomRate($RoomRate)
    {
      $this->RoomRate = $RoomRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomPromtion()
    {
      return $this->RoomPromtion;
    }

    /**
     * @param string $RoomPromtion
     * @return Hotel_Room
     */
    public function setRoomPromtion($RoomPromtion)
    {
      $this->RoomPromtion = $RoomPromtion;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomInstructions()
    {
      return $this->RoomInstructions;
    }

    /**
     * @param string $RoomInstructions
     * @return Hotel_Room
     */
    public function setRoomInstructions($RoomInstructions)
    {
      $this->RoomInstructions = $RoomInstructions;
      return $this;
    }

    /**
     * @return ArrayOfSupplement
     */
    public function getSupplements()
    {
      return $this->Supplements;
    }

    /**
     * @param ArrayOfSupplement $Supplements
     * @return Hotel_Room
     */
    public function setSupplements($Supplements)
    {
      $this->Supplements = $Supplements;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomEssentialInfo()
    {
      return $this->RoomEssentialInfo;
    }

    /**
     * @param string $RoomEssentialInfo
     * @return Hotel_Room
     */
    public function setRoomEssentialInfo($RoomEssentialInfo)
    {
      $this->RoomEssentialInfo = $RoomEssentialInfo;
      return $this;
    }

    /**
     * @return RoomInformation
     */
    public function getRoomAdditionalInfo()
    {
      return $this->RoomAdditionalInfo;
    }

    /**
     * @param RoomInformation $RoomAdditionalInfo
     * @return Hotel_Room
     */
    public function setRoomAdditionalInfo($RoomAdditionalInfo)
    {
      $this->RoomAdditionalInfo = $RoomAdditionalInfo;
      return $this;
    }

}
