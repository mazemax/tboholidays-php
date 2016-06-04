<?php

class GenerateInvoiceResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $BookingId
     */
    protected $BookingId = null;

    /**
     * @var string $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @param ResponseStatus $Status
     * @param string $BookingId
     * @param string $InvoiceNo
     */
    public function __construct($Status, $BookingId, $InvoiceNo)
    {
      $this->Status = $Status;
      $this->BookingId = $BookingId;
      $this->InvoiceNo = $InvoiceNo;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ResponseStatus $Status
     * @return GenerateInvoiceResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingId()
    {
      return $this->BookingId;
    }

    /**
     * @param string $BookingId
     * @return GenerateInvoiceResponse
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
      return $this->InvoiceNo;
    }

    /**
     * @param string $InvoiceNo
     * @return GenerateInvoiceResponse
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

}
