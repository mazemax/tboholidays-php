<?php

class MinHotelPrice
{

    /**
     * @var string $PrefPrice
     */
    protected $PrefPrice = null;

    /**
     * @var string $PrefCurrency
     */
    protected $PrefCurrency = null;

    /**
     * @var float $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var boolean $B2CRates
     */
    protected $B2CRates = null;

    /**
     * @var float $OriginalPrice
     */
    protected $OriginalPrice = null;

    /**
     * @param string $PrefPrice
     * @param string $PrefCurrency
     * @param float $TotalPrice
     * @param string $Currency
     * @param boolean $B2CRates
     * @param float $OriginalPrice
     */
    public function __construct($PrefPrice, $PrefCurrency, $TotalPrice, $Currency, $B2CRates, $OriginalPrice)
    {
      $this->PrefPrice = $PrefPrice;
      $this->PrefCurrency = $PrefCurrency;
      $this->TotalPrice = $TotalPrice;
      $this->Currency = $Currency;
      $this->B2CRates = $B2CRates;
      $this->OriginalPrice = $OriginalPrice;
    }

    /**
     * @return string
     */
    public function getPrefPrice()
    {
      return $this->PrefPrice;
    }

    /**
     * @param string $PrefPrice
     * @return MinHotelPrice
     */
    public function setPrefPrice($PrefPrice)
    {
      $this->PrefPrice = $PrefPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefCurrency()
    {
      return $this->PrefCurrency;
    }

    /**
     * @param string $PrefCurrency
     * @return MinHotelPrice
     */
    public function setPrefCurrency($PrefCurrency)
    {
      $this->PrefCurrency = $PrefCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param float $TotalPrice
     * @return MinHotelPrice
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return MinHotelPrice
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getB2CRates()
    {
      return $this->B2CRates;
    }

    /**
     * @param boolean $B2CRates
     * @return MinHotelPrice
     */
    public function setB2CRates($B2CRates)
    {
      $this->B2CRates = $B2CRates;
      return $this;
    }

    /**
     * @return float
     */
    public function getOriginalPrice()
    {
      return $this->OriginalPrice;
    }

    /**
     * @param float $OriginalPrice
     * @return MinHotelPrice
     */
    public function setOriginalPrice($OriginalPrice)
    {
      $this->OriginalPrice = $OriginalPrice;
      return $this;
    }

}
