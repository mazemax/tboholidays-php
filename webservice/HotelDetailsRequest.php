<?php

class HotelDetailsRequest
{

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var string $SessionId
     */
    protected $SessionId = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @param int $ResultIndex
     * @param string $SessionId
     * @param string $HotelCode
     */
    public function __construct($ResultIndex, $SessionId, $HotelCode)
    {
      $this->ResultIndex = $ResultIndex;
      $this->SessionId = $SessionId;
      $this->HotelCode = $HotelCode;
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
     * @return HotelDetailsRequest
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
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
     * @return HotelDetailsRequest
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
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
     * @return HotelDetailsRequest
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

}
