<?php

class Hotels
{

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $CityCode
     */
    protected $CityCode = null;

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param string $HotelCode
     * @param string $CityCode
     * @param string $CityName
     * @param string $CountryCode
     */
    public function __construct($HotelCode, $CityCode, $CityName, $CountryCode)
    {
      $this->HotelCode = $HotelCode;
      $this->CityCode = $CityCode;
      $this->CityName = $CityName;
      $this->CountryCode = $CountryCode;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return Hotels
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityCode()
    {
      return $this->CityCode;
    }

    /**
     * @param string $CityCode
     * @return Hotels
     */
    public function setCityCode($CityCode)
    {
      $this->CityCode = $CityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
      return $this->CityName;
    }

    /**
     * @param string $CityName
     * @return Hotels
     */
    public function setCityName($CityName)
    {
      $this->CityName = $CityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return Hotels
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
