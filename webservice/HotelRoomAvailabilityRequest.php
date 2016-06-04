<?php

class HotelRoomAvailabilityRequest
{

    /**
     * @var string $SessionId
     */
    protected $SessionId = null;

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @param string $SessionId
     * @param int $ResultIndex
     * @param string $HotelCode
     */
    public function __construct($SessionId, $ResultIndex, $HotelCode)
    {
      $this->SessionId = $SessionId;
      $this->ResultIndex = $ResultIndex;
      $this->HotelCode = $HotelCode;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param string $SessionId
     * @return HotelRoomAvailabilityRequest
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
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
     * @return HotelRoomAvailabilityRequest
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return HotelRoomAvailabilityRequest
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

}
