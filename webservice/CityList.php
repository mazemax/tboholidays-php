<?php

class CityList
{

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
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @param string $CityCode
     * @param string $CityName
     * @param string $CountryCode
     * @param string $CountryName
     */
    public function __construct($CityCode, $CityName, $CountryCode, $CountryName)
    {
      $this->CityCode = $CityCode;
      $this->CityName = $CityName;
      $this->CountryCode = $CountryCode;
      $this->CountryName = $CountryName;
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
     * @return CityList
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
     * @return CityList
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
     * @return CityList
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return CityList
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

}
