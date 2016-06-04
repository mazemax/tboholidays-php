<?php

class CountryList
{

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param string $CountryName
     * @param string $CountryCode
     */
    public function __construct($CountryName, $CountryCode)
    {
      $this->CountryName = $CountryName;
      $this->CountryCode = $CountryCode;
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
     * @return CountryList
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
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
     * @return CountryList
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
