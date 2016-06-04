<?php

class AmendmentRequestType
{

    /**
     * @var AmendmentType $Type
     */
    protected $Type = null;

    /**
     * @var PriceChange $PriceChange
     */
    protected $PriceChange = null;

    /**
     * @var string $Remarks
     */
    protected $Remarks = null;

    /**
     * @param AmendmentType $Type
     * @param PriceChange $PriceChange
     * @param string $Remarks
     */
    public function __construct($Type, $PriceChange, $Remarks)
    {
      $this->Type = $Type;
      $this->PriceChange = $PriceChange;
      $this->Remarks = $Remarks;
    }

    /**
     * @return AmendmentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param AmendmentType $Type
     * @return AmendmentRequestType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return PriceChange
     */
    public function getPriceChange()
    {
      return $this->PriceChange;
    }

    /**
     * @param PriceChange $PriceChange
     * @return AmendmentRequestType
     */
    public function setPriceChange($PriceChange)
    {
      $this->PriceChange = $PriceChange;
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
     * @return AmendmentRequestType
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

}
