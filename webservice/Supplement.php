<?php

class Supplement
{

    /**
     * @var SupplementType $Type
     */
    protected $Type = null;

    /**
     * @var int $SuppID
     */
    protected $SuppID = null;

    /**
     * @var string $SuppName
     */
    protected $SuppName = null;

    /**
     * @var boolean $SuppIsMandatory
     */
    protected $SuppIsMandatory = null;

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
     * @param int $SuppID
     * @param string $SuppName
     * @param boolean $SuppIsMandatory
     * @param SupmtChargeType $SuppChargeType
     * @param float $Price
     */
    public function __construct($Type, $SuppID, $SuppName, $SuppIsMandatory, $SuppChargeType, $Price)
    {
      $this->Type = $Type;
      $this->SuppID = $SuppID;
      $this->SuppName = $SuppName;
      $this->SuppIsMandatory = $SuppIsMandatory;
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
     * @return Supplement
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
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
     * @return Supplement
     */
    public function setSuppID($SuppID)
    {
      $this->SuppID = $SuppID;
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
     * @return Supplement
     */
    public function setSuppName($SuppName)
    {
      $this->SuppName = $SuppName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppIsMandatory()
    {
      return $this->SuppIsMandatory;
    }

    /**
     * @param boolean $SuppIsMandatory
     * @return Supplement
     */
    public function setSuppIsMandatory($SuppIsMandatory)
    {
      $this->SuppIsMandatory = $SuppIsMandatory;
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
     * @return Supplement
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
     * @return Supplement
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
