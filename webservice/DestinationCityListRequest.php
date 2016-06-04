<?php

class DestinationCityListRequest
{

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param string $CountryCode
     */
    public function __construct($CountryCode)
    {
      $this->CountryCode = $CountryCode;
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
     * @return DestinationCityListRequest
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
