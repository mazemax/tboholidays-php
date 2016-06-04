<?php

class HotelDetailsVerification
{

    /**
     * @var HotelDetailsVerificationStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $Remarks
     */
    protected $Remarks = null;

    /**
     * @param HotelDetailsVerificationStatus $Status
     * @param string $Remarks
     */
    public function __construct($Status, $Remarks)
    {
      $this->Status = $Status;
      $this->Remarks = $Remarks;
    }

    /**
     * @return HotelDetailsVerificationStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param HotelDetailsVerificationStatus $Status
     * @return HotelDetailsVerification
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param string $Remarks
     * @return HotelDetailsVerification
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

}
