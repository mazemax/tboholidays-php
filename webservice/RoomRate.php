<?php

class RoomRate
{

    /**
     * @var ArrayOfDayRate $DayRates
     */
    protected $DayRates = null;

    /**
     * @var float $ExtraGuestCharges
     */
    protected $ExtraGuestCharges = null;

    /**
     * @var float $ChildCharges
     */
    protected $ChildCharges = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var float $OtherCharges
     */
    protected $OtherCharges = null;

    /**
     * @var float $ServiceTax
     */
    protected $ServiceTax = null;

    /**
     * @var boolean $B2CRates
     */
    protected $B2CRates = null;

    /**
     * @var string $HeadGSAMarkUp
     */
    protected $HeadGSAMarkUp = null;

    /**
     * @var float $AgentMarkUp
     */
    protected $AgentMarkUp = null;

    /**
     * @var float $RoomTax
     */
    protected $RoomTax = null;

    /**
     * @var float $RoomFare
     */
    protected $RoomFare = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $PrefPrice
     */
    protected $PrefPrice = null;

    /**
     * @var string $PrefCurrency
     */
    protected $PrefCurrency = null;

    /**
     * @var float $TotalFare
     */
    protected $TotalFare = null;

    /**
     * @param float $ExtraGuestCharges
     * @param float $ChildCharges
     * @param float $Discount
     * @param float $OtherCharges
     * @param float $ServiceTax
     * @param boolean $B2CRates
     * @param string $HeadGSAMarkUp
     * @param float $AgentMarkUp
     * @param float $RoomTax
     * @param float $RoomFare
     * @param string $Currency
     * @param string $PrefPrice
     * @param string $PrefCurrency
     * @param float $TotalFare
     */
    public function __construct($ExtraGuestCharges, $ChildCharges, $Discount, $OtherCharges, $ServiceTax, $B2CRates, $HeadGSAMarkUp, $AgentMarkUp, $RoomTax, $RoomFare, $Currency, $PrefPrice, $PrefCurrency, $TotalFare)
    {
      $this->ExtraGuestCharges = $ExtraGuestCharges;
      $this->ChildCharges = $ChildCharges;
      $this->Discount = $Discount;
      $this->OtherCharges = $OtherCharges;
      $this->ServiceTax = $ServiceTax;
      $this->B2CRates = $B2CRates;
      $this->HeadGSAMarkUp = $HeadGSAMarkUp;
      $this->AgentMarkUp = $AgentMarkUp;
      $this->RoomTax = $RoomTax;
      $this->RoomFare = $RoomFare;
      $this->Currency = $Currency;
      $this->PrefPrice = $PrefPrice;
      $this->PrefCurrency = $PrefCurrency;
      $this->TotalFare = $TotalFare;
    }

    /**
     * @return ArrayOfDayRate
     */
    public function getDayRates()
    {
      return $this->DayRates;
    }

    /**
     * @param ArrayOfDayRate $DayRates
     * @return RoomRate
     */
    public function setDayRates($DayRates)
    {
      $this->DayRates = $DayRates;
      return $this;
    }

    /**
     * @return float
     */
    public function getExtraGuestCharges()
    {
      return $this->ExtraGuestCharges;
    }

    /**
     * @param float $ExtraGuestCharges
     * @return RoomRate
     */
    public function setExtraGuestCharges($ExtraGuestCharges)
    {
      $this->ExtraGuestCharges = $ExtraGuestCharges;
      return $this;
    }

    /**
     * @return float
     */
    public function getChildCharges()
    {
      return $this->ChildCharges;
    }

    /**
     * @param float $ChildCharges
     * @return RoomRate
     */
    public function setChildCharges($ChildCharges)
    {
      $this->ChildCharges = $ChildCharges;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return RoomRate
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getOtherCharges()
    {
      return $this->OtherCharges;
    }

    /**
     * @param float $OtherCharges
     * @return RoomRate
     */
    public function setOtherCharges($OtherCharges)
    {
      $this->OtherCharges = $OtherCharges;
      return $this;
    }

    /**
     * @return float
     */
    public function getServiceTax()
    {
      return $this->ServiceTax;
    }

    /**
     * @param float $ServiceTax
     * @return RoomRate
     */
    public function setServiceTax($ServiceTax)
    {
      $this->ServiceTax = $ServiceTax;
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
     * @return RoomRate
     */
    public function setB2CRates($B2CRates)
    {
      $this->B2CRates = $B2CRates;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadGSAMarkUp()
    {
      return $this->HeadGSAMarkUp;
    }

    /**
     * @param string $HeadGSAMarkUp
     * @return RoomRate
     */
    public function setHeadGSAMarkUp($HeadGSAMarkUp)
    {
      $this->HeadGSAMarkUp = $HeadGSAMarkUp;
      return $this;
    }

    /**
     * @return float
     */
    public function getAgentMarkUp()
    {
      return $this->AgentMarkUp;
    }

    /**
     * @param float $AgentMarkUp
     * @return RoomRate
     */
    public function setAgentMarkUp($AgentMarkUp)
    {
      $this->AgentMarkUp = $AgentMarkUp;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoomTax()
    {
      return $this->RoomTax;
    }

    /**
     * @param float $RoomTax
     * @return RoomRate
     */
    public function setRoomTax($RoomTax)
    {
      $this->RoomTax = $RoomTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoomFare()
    {
      return $this->RoomFare;
    }

    /**
     * @param float $RoomFare
     * @return RoomRate
     */
    public function setRoomFare($RoomFare)
    {
      $this->RoomFare = $RoomFare;
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
     * @return RoomRate
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
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
     * @return RoomRate
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
     * @return RoomRate
     */
    public function setPrefCurrency($PrefCurrency)
    {
      $this->PrefCurrency = $PrefCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalFare()
    {
      return $this->TotalFare;
    }

    /**
     * @param float $TotalFare
     * @return RoomRate
     */
    public function setTotalFare($TotalFare)
    {
      $this->TotalFare = $TotalFare;
      return $this;
    }

}
