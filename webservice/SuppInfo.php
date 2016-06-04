<?php

class SuppInfo
{

    /**
     * @var int $SuppID
     */
    protected $SuppID = null;

    /**
     * @var SuppChargeType $SuppChargeType
     */
    protected $SuppChargeType = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var boolean $SuppIsSelected
     */
    protected $SuppIsSelected = null;

    /**
     * @param int $SuppID
     * @param SuppChargeType $SuppChargeType
     * @param float $Price
     * @param boolean $SuppIsSelected
     */
    public function __construct($SuppID, $SuppChargeType, $Price, $SuppIsSelected)
    {
      $this->SuppID = $SuppID;
      $this->SuppChargeType = $SuppChargeType;
      $this->Price = $Price;
      $this->SuppIsSelected = $SuppIsSelected;
    }

    /**
     * @return int
     */
    public function getSuppID()
    {
      return $this->SuppID;
    }

    /**
     * @param int $SuppID
     * @return SuppInfo
     */
    public function setSuppID($SuppID)
    {
      $this->SuppID = $SuppID;
      return $this;
    }

    /**
     * @return SuppChargeType
     */
    public function getSuppChargeType()
    {
      return $this->SuppChargeType;
    }

    /**
     * @param SuppChargeType $SuppChargeType
     * @return SuppInfo
     */
    public function setSuppChargeType($SuppChargeType)
    {
      $this->SuppChargeType = $SuppChargeType;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return SuppInfo
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppIsSelected()
    {
      return $this->SuppIsSelected;
    }

    /**
     * @param boolean $SuppIsSelected
     * @return SuppInfo
     */
    public function setSuppIsSelected($SuppIsSelected)
    {
      $this->SuppIsSelected = $SuppIsSelected;
      return $this;
    }

}
