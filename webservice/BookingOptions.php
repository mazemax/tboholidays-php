<?php

class BookingOptions
{

    /**
     * @var boolean $FixedFormat
     */
    protected $FixedFormat = null;

    /**
     * @var RoomCombination[] $RoomCombination
     */
    protected $RoomCombination = null;

    /**
     * @param boolean $FixedFormat
     */
    public function __construct($FixedFormat)
    {
      $this->FixedFormat = $FixedFormat;
    }

    /**
     * @return boolean
     */
    public function getFixedFormat()
    {
      return $this->FixedFormat;
    }

    /**
     * @param boolean $FixedFormat
     * @return BookingOptions
     */
    public function setFixedFormat($FixedFormat)
    {
      $this->FixedFormat = $FixedFormat;
      return $this;
    }

    /**
     * @return RoomCombination[]
     */
    public function getRoomCombination()
    {
      return $this->RoomCombination;
    }

    /**
     * @param RoomCombination[] $RoomCombination
     * @return BookingOptions
     */
    public function setRoomCombination(array $RoomCombination = null)
    {
      $this->RoomCombination = $RoomCombination;
      return $this;
    }

}
