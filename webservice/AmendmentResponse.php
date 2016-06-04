<?php

class AmendmentResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var RequestStatus $RequestStatus
     */
    protected $RequestStatus = null;

    /**
     * @var ApprovalInformation $ApprovalInformation
     */
    protected $ApprovalInformation = null;

    /**
     * @var int $BookingId
     */
    protected $BookingId = null;

    /**
     * @var string $NewConfirmatioNo
     */
    protected $NewConfirmatioNo = null;

    /**
     * @var string $NewLastCancellationDate
     */
    protected $NewLastCancellationDate = null;

    /**
     * @var string $AmendmentMessage
     */
    protected $AmendmentMessage = null;

    /**
     * @var AmendmentRequested $AmendmentRequested
     */
    protected $AmendmentRequested = null;

    /**
     * @param ResponseStatus $Status
     * @param RequestStatus $RequestStatus
     * @param ApprovalInformation $ApprovalInformation
     * @param int $BookingId
     * @param string $NewConfirmatioNo
     * @param string $NewLastCancellationDate
     * @param string $AmendmentMessage
     * @param AmendmentRequested $AmendmentRequested
     */
    public function __construct($Status, $RequestStatus, $ApprovalInformation, $BookingId, $NewConfirmatioNo, $NewLastCancellationDate, $AmendmentMessage, $AmendmentRequested)
    {
      $this->Status = $Status;
      $this->RequestStatus = $RequestStatus;
      $this->ApprovalInformation = $ApprovalInformation;
      $this->BookingId = $BookingId;
      $this->NewConfirmatioNo = $NewConfirmatioNo;
      $this->NewLastCancellationDate = $NewLastCancellationDate;
      $this->AmendmentMessage = $AmendmentMessage;
      $this->AmendmentRequested = $AmendmentRequested;
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
     * @return AmendmentResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return RequestStatus
     */
    public function getRequestStatus()
    {
      return $this->RequestStatus;
    }

    /**
     * @param RequestStatus $RequestStatus
     * @return AmendmentResponse
     */
    public function setRequestStatus($RequestStatus)
    {
      $this->RequestStatus = $RequestStatus;
      return $this;
    }

    /**
     * @return ApprovalInformation
     */
    public function getApprovalInformation()
    {
      return $this->ApprovalInformation;
    }

    /**
     * @param ApprovalInformation $ApprovalInformation
     * @return AmendmentResponse
     */
    public function setApprovalInformation($ApprovalInformation)
    {
      $this->ApprovalInformation = $ApprovalInformation;
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
     * @return AmendmentResponse
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewConfirmatioNo()
    {
      return $this->NewConfirmatioNo;
    }

    /**
     * @param string $NewConfirmatioNo
     * @return AmendmentResponse
     */
    public function setNewConfirmatioNo($NewConfirmatioNo)
    {
      $this->NewConfirmatioNo = $NewConfirmatioNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewLastCancellationDate()
    {
      return $this->NewLastCancellationDate;
    }

    /**
     * @param string $NewLastCancellationDate
     * @return AmendmentResponse
     */
    public function setNewLastCancellationDate($NewLastCancellationDate)
    {
      $this->NewLastCancellationDate = $NewLastCancellationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmendmentMessage()
    {
      return $this->AmendmentMessage;
    }

    /**
     * @param string $AmendmentMessage
     * @return AmendmentResponse
     */
    public function setAmendmentMessage($AmendmentMessage)
    {
      $this->AmendmentMessage = $AmendmentMessage;
      return $this;
    }

    /**
     * @return AmendmentRequested
     */
    public function getAmendmentRequested()
    {
      return $this->AmendmentRequested;
    }

    /**
     * @param AmendmentRequested $AmendmentRequested
     * @return AmendmentResponse
     */
    public function setAmendmentRequested($AmendmentRequested)
    {
      $this->AmendmentRequested = $AmendmentRequested;
      return $this;
    }

}
