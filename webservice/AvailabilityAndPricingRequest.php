<?php

class AvailabilityAndPricingRequest
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
     * @var BookingOptions $OptionsForBooking
     */
    protected $OptionsForBooking = null;

    /**
     * @param int $ResultIndex
     * @param string $SessionId
     * @param BookingOptions $OptionsForBooking
     */
    public function __construct($ResultIndex, $SessionId, $OptionsForBooking)
    {
      $this->ResultIndex = $ResultIndex;
      $this->SessionId = $SessionId;
      $this->OptionsForBooking = $OptionsForBooking;
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
     * @return AvailabilityAndPricingRequest
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
     * @return AvailabilityAndPricingRequest
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return BookingOptions
     */
    public function getOptionsForBooking()
    {
      return $this->OptionsForBooking;
    }

    /**
     * @param BookingOptions $OptionsForBooking
     * @return AvailabilityAndPricingRequest
     */
    public function setOptionsForBooking($OptionsForBooking)
    {
      $this->OptionsForBooking = $OptionsForBooking;
      return $this;
    }

}
