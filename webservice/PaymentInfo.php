<?php

class PaymentInfo
{

    /**
     * @var boolean $VoucherBooking
     */
    protected $VoucherBooking = null;

    /**
     * @var PaymentModeType $PaymentModeType
     */
    protected $PaymentModeType = null;

    /**
     * @param boolean $VoucherBooking
     * @param PaymentModeType $PaymentModeType
     */
    public function __construct($VoucherBooking, $PaymentModeType)
    {
      $this->VoucherBooking = $VoucherBooking;
      $this->PaymentModeType = $PaymentModeType;
    }

    /**
     * @return boolean
     */
    public function getVoucherBooking()
    {
      return $this->VoucherBooking;
    }

    /**
     * @param boolean $VoucherBooking
     * @return PaymentInfo
     */
    public function setVoucherBooking($VoucherBooking)
    {
      $this->VoucherBooking = $VoucherBooking;
      return $this;
    }

    /**
     * @return PaymentModeType
     */
    public function getPaymentModeType()
    {
      return $this->PaymentModeType;
    }

    /**
     * @param PaymentModeType $PaymentModeType
     * @return PaymentInfo
     */
    public function setPaymentModeType($PaymentModeType)
    {
      $this->PaymentModeType = $PaymentModeType;
      return $this;
    }

}
