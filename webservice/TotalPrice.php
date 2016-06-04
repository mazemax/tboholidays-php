<?php

class TotalPrice
{

    /**
     * @var float $BeforeAmendmentPrice
     */
    protected $BeforeAmendmentPrice = null;

    /**
     * @var float $AfterAmendmentPrice
     */
    protected $AfterAmendmentPrice = null;

    /**
     * @param float $BeforeAmendmentPrice
     * @param float $AfterAmendmentPrice
     */
    public function __construct($BeforeAmendmentPrice, $AfterAmendmentPrice)
    {
      $this->BeforeAmendmentPrice = $BeforeAmendmentPrice;
      $this->AfterAmendmentPrice = $AfterAmendmentPrice;
    }

    /**
     * @return float
     */
    public function getBeforeAmendmentPrice()
    {
      return $this->BeforeAmendmentPrice;
    }

    /**
     * @param float $BeforeAmendmentPrice
     * @return TotalPrice
     */
    public function setBeforeAmendmentPrice($BeforeAmendmentPrice)
    {
      $this->BeforeAmendmentPrice = $BeforeAmendmentPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getAfterAmendmentPrice()
    {
      return $this->AfterAmendmentPrice;
    }

    /**
     * @param float $AfterAmendmentPrice
     * @return TotalPrice
     */
    public function setAfterAmendmentPrice($AfterAmendmentPrice)
    {
      $this->AfterAmendmentPrice = $AfterAmendmentPrice;
      return $this;
    }

}
