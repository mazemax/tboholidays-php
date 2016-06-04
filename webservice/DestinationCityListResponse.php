<?php

class DestinationCityListResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var ArrayOfCityList $CityList
     */
    protected $CityList = null;

    /**
     * @param ResponseStatus $Status
     * @param string $CountryName
     * @param ArrayOfCityList $CityList
     */
    public function __construct($Status, $CountryName, $CityList)
    {
      $this->Status = $Status;
      $this->CountryName = $CountryName;
      $this->CityList = $CityList;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ResponseStatus $Status
     * @return DestinationCityListResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return DestinationCityListResponse
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

    /**
     * @return ArrayOfCityList
     */
    public function getCityList()
    {
      return $this->CityList;
    }

    /**
     * @param ArrayOfCityList $CityList
     * @return DestinationCityListResponse
     */
    public function setCityList($CityList)
    {
      $this->CityList = $CityList;
      return $this;
    }

}
