<?php

class SpecialRequest
{

    /**
     * @var int $RequestId
     */
    protected $RequestId = null;

    /**
     * @var string $RequestType
     */
    protected $RequestType = null;

    /**
     * @var string $Remarks
     */
    protected $Remarks = null;

    /**
     * @param int $RequestId
     * @param string $RequestType
     * @param string $Remarks
     */
    public function __construct($RequestId, $RequestType, $Remarks)
    {
      $this->RequestId = $RequestId;
      $this->RequestType = $RequestType;
      $this->Remarks = $Remarks;
    }

    /**
     * @return int
     */
    public function getRequestId()
    {
      return $this->RequestId;
    }

    /**
     * @param int $RequestId
     * @return SpecialRequest
     */
    public function setRequestId($RequestId)
    {
      $this->RequestId = $RequestId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
      return $this->RequestType;
    }

    /**
     * @param string $RequestType
     * @return SpecialRequest
     */
    public function setRequestType($RequestType)
    {
      $this->RequestType = $RequestType;
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
     * @return SpecialRequest
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

}
