<?php

class GenerateInvoiceRequest
{

    /**
     * @var int $BookingId
     */
    protected $BookingId = null;

    /**
     * @var PaymentInfo $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @param int $BookingId
     * @param PaymentInfo $PaymentInfo
     */
    public function __construct($BookingId, $PaymentInfo)
    {
      $this->BookingId = $BookingId;
      $this->PaymentInfo = $PaymentInfo;
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
     * @return GenerateInvoiceRequest
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo $PaymentInfo
     * @return GenerateInvoiceRequest
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

}
