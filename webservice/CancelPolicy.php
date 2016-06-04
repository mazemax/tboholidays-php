<?php

class CancelPolicy
{

    /**
     * @var string $RoomTypeName
     */
    protected $RoomTypeName = null;

    /**
     * @var string $RoomIndex
     */
    protected $RoomIndex = null;

    /**
     * @var string $FromDate
     */
    protected $FromDate = null;

    /**
     * @var string $ToDate
     */
    protected $ToDate = null;

    /**
     * @var CancellationChargeTypeForHotel $ChargeType
     */
    protected $ChargeType = null;

    /**
     * @var float $CancellationCharge
     */
    protected $CancellationCharge = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $PrefCurrency
     */
    protected $PrefCurrency = null;

    /**
     * @var string $PrefCancellationCharge
     */
    protected $PrefCancellationCharge = null;

    /**
     * @param string $RoomTypeName
     * @param string $RoomIndex
     * @param string $FromDate
     * @param string $ToDate
     * @param CancellationChargeTypeForHotel $ChargeType
     * @param float $CancellationCharge
     * @param string $Currency
     * @param string $PrefCurrency
     * @param string $PrefCancellationCharge
     */
    public function __construct($RoomTypeName, $RoomIndex, $FromDate, $ToDate, $ChargeType, $CancellationCharge, $Currency, $PrefCurrency, $PrefCancellationCharge)
    {
      $this->RoomTypeName = $RoomTypeName;
      $this->RoomIndex = $RoomIndex;
      $this->FromDate = $FromDate;
      $this->ToDate = $ToDate;
      $this->ChargeType = $ChargeType;
      $this->CancellationCharge = $CancellationCharge;
      $this->Currency = $Currency;
      $this->PrefCurrency = $PrefCurrency;
      $this->PrefCancellationCharge = $PrefCancellationCharge;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
      return $this->RoomTypeName;
    }

    /**
     * @param string $RoomTypeName
     * @return CancelPolicy
     */
    public function setRoomTypeName($RoomTypeName)
    {
      $this->RoomTypeName = $RoomTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomIndex()
    {
      return $this->RoomIndex;
    }

    /**
     * @param string $RoomIndex
     * @return CancelPolicy
     */
    public function setRoomIndex($RoomIndex)
    {
      $this->RoomIndex = $RoomIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
      return $this->FromDate;
    }

    /**
     * @param string $FromDate
     * @return CancelPolicy
     */
    public function setFromDate($FromDate)
    {
      $this->FromDate = $FromDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
      return $this->ToDate;
    }

    /**
     * @param string $ToDate
     * @return CancelPolicy
     */
    public function setToDate($ToDate)
    {
      $this->ToDate = $ToDate;
      return $this;
    }

    /**
     * @return CancellationChargeTypeForHotel
     */
    public function getChargeType()
    {
      return $this->ChargeType;
    }

    /**
     * @param CancellationChargeTypeForHotel $ChargeType
     * @return CancelPolicy
     */
    public function setChargeType($ChargeType)
    {
      $this->ChargeType = $ChargeType;
      return $this;
    }

    /**
     * @return float
     */
    public function getCancellationCharge()
    {
      return $this->CancellationCharge;
    }

    /**
     * @param float $CancellationCharge
     * @return CancelPolicy
     */
    public function setCancellationCharge($CancellationCharge)
    {
      $this->CancellationCharge = $CancellationCharge;
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
     * @return CancelPolicy
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return CancelPolicy
     */
    public function setPrefCurrency($PrefCurrency)
    {
      $this->PrefCurrency = $PrefCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefCancellationCharge()
    {
      return $this->PrefCancellationCharge;
    }

    /**
     * @param string $PrefCancellationCharge
     * @return CancelPolicy
     */
    public function setPrefCancellationCharge($PrefCancellationCharge)
    {
      $this->PrefCancellationCharge = $PrefCancellationCharge;
      return $this;
    }

}
