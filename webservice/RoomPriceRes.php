<?php

class RoomPriceRes
{

    /**
     * @var RoomRequested $RoomIndex
     */
    protected $RoomIndex = null;

    /**
     * @var string $RoomName
     */
    protected $RoomName = null;

    /**
     * @var float $BeforeAmendmentPrice
     */
    protected $BeforeAmendmentPrice = null;

    /**
     * @var float $AfterAmendmentPrice
     */
    protected $AfterAmendmentPrice = null;

    /**
     * @param RoomRequested $RoomIndex
     * @param string $RoomName
     * @param float $BeforeAmendmentPrice
     * @param float $AfterAmendmentPrice
     */
    public function __construct($RoomIndex, $RoomName, $BeforeAmendmentPrice, $AfterAmendmentPrice)
    {
      $this->RoomIndex = $RoomIndex;
      $this->RoomName = $RoomName;
      $this->BeforeAmendmentPrice = $BeforeAmendmentPrice;
      $this->AfterAmendmentPrice = $AfterAmendmentPrice;
    }

    /**
     * @return RoomRequested
     */
    public function getRoomIndex()
    {
      return $this->RoomIndex;
    }

    /**
     * @param RoomRequested $RoomIndex
     * @return RoomPriceRes
     */
    public function setRoomIndex($RoomIndex)
    {
      $this->RoomIndex = $RoomIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomName()
    {
      return $this->RoomName;
    }

    /**
     * @param string $RoomName
     * @return RoomPriceRes
     */
    public function setRoomName($RoomName)
    {
      $this->RoomName = $RoomName;
      return $this;
    }

    /**
     * @return float
     */
    public function getBeforeAmendmentPrice()
    {
      return $this->BeforeAmendmentPrice;
    }

    /**
     * @param float $BeforeAmendmentPrice
     * @return RoomPriceRes
     */
    public function setBeforeAmendmentPrice($BeforeAmendmentPrice)
    {
      $this->BeforeAmendmentPrice = $BeforeAmendmentPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getAfterAmendmentPrice()
    {
      return $this->AfterAmendmentPrice;
    }

    /**
     * @param float $AfterAmendmentPrice
     * @return RoomPriceRes
     */
    public function setAfterAmendmentPrice($AfterAmendmentPrice)
    {
      $this->AfterAmendmentPrice = $AfterAmendmentPrice;
      return $this;
    }

}
