<?php

class Hotel_Result
{

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var HotelInfo $HotelInfo
     */
    protected $HotelInfo = null;

    /**
     * @var MinHotelPrice $MinHotelPrice
     */
    protected $MinHotelPrice = null;

    /**
     * @var boolean $IsPkgProperty
     */
    protected $IsPkgProperty = null;

    /**
     * @param int $ResultIndex
     * @param boolean $IsPkgProperty
     */
    public function __construct($ResultIndex, $IsPkgProperty)
    {
      $this->ResultIndex = $ResultIndex;
      $this->IsPkgProperty = $IsPkgProperty;
    }

    /**
     * @return int
     */
    public function getResultIndex()
    {
      return $this->ResultIndex;
    }

    /**
     * @param int $ResultIndex
     * @return Hotel_Result
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
    }

    /**
     * @return HotelInfo
     */
    public function getHotelInfo()
    {
      return $this->HotelInfo;
    }

    /**
     * @param HotelInfo $HotelInfo
     * @return Hotel_Result
     */
    public function setHotelInfo($HotelInfo)
    {
      $this->HotelInfo = $HotelInfo;
      return $this;
    }

    /**
     * @return MinHotelPrice
     */
    public function getMinHotelPrice()
    {
      return $this->MinHotelPrice;
    }

    /**
     * @param MinHotelPrice $MinHotelPrice
     * @return Hotel_Result
     */
    public function setMinHotelPrice($MinHotelPrice)
    {
      $this->MinHotelPrice = $MinHotelPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPkgProperty()
    {
      return $this->IsPkgProperty;
    }

    /**
     * @param boolean $IsPkgProperty
     * @return Hotel_Result
     */
    public function setIsPkgProperty($IsPkgProperty)
    {
      $this->IsPkgProperty = $IsPkgProperty;
      return $this;
    }

}
