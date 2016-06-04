<?php

class Supp_info
{

    /**
     * @var SupplementType $Type
     */
    protected $Type = null;

    /**
     * @var string $SuppName
     */
    protected $SuppName = null;

    /**
     * @var SupmtChargeType $SuppChargeType
     */
    protected $SuppChargeType = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @param SupplementType $Type
     * @param string $SuppName
     * @param SupmtChargeType $SuppChargeType
     * @param float $Price
     */
    public function __construct($Type, $SuppName, $SuppChargeType, $Price)
    {
      $this->Type = $Type;
      $this->SuppName = $SuppName;
      $this->SuppChargeType = $SuppChargeType;
      $this->Price = $Price;
    }

    /**
     * @return SupplementType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SupplementType $Type
     * @return Supp_info
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuppName()
    {
      return $this->SuppName;
    }

    /**
     * @param string $SuppName
     * @return Supp_info
     */
    public function setSuppName($SuppName)
    {
      $this->SuppName = $SuppName;
      return $this;
    }

    /**
     * @return SupmtChargeType
     */
    public function getSuppChargeType()
    {
      return $this->SuppChargeType;
    }

    /**
     * @param SupmtChargeType $SuppChargeType
     * @return Supp_info
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
     * @return Supp_info
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
