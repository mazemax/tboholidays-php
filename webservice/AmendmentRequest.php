<?php

class AmendmentRequest
{

    /**
     * @var AmendmentRequestType $Request
     */
    protected $Request = null;

    /**
     * @var int $BookingId
     */
    protected $BookingId = null;

    /**
     * @var AmendInformation $AmendInformation
     */
    protected $AmendInformation = null;

    /**
     * @param AmendmentRequestType $Request
     * @param int $BookingId
     * @param AmendInformation $AmendInformation
     */
    public function __construct($Request, $BookingId, $AmendInformation)
    {
      $this->Request = $Request;
      $this->BookingId = $BookingId;
      $this->AmendInformation = $AmendInformation;
    }

    /**
     * @return AmendmentRequestType
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param AmendmentRequestType $Request
     * @return AmendmentRequest
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

    /**
     * @return int
     */
    public function getBookingId()
    {
      return $this->BookingId;
    }

    /**
     * @param int $BookingId
     * @return AmendmentRequest
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return AmendInformation
     */
    public function getAmendInformation()
    {
      return $this->AmendInformation;
    }

    /**
     * @param AmendInformation $AmendInformation
     * @return AmendmentRequest
     */
    public function setAmendInformation($AmendInformation)
    {
      $this->AmendInformation = $AmendInformation;
      return $this;
    }

}
