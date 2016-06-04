<?php

class TopDestinationsResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfCityList $CityList
     */
    protected $CityList = null;

    /**
     * @param ResponseStatus $Status
     * @param ArrayOfCityList $CityList
     */
    public function __construct($Status, $CityList)
    {
      $this->Status = $Status;
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
     * @return TopDestinationsResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return TopDestinationsResponse
     */
    public function setCityList($CityList)
    {
      $this->CityList = $CityList;
      return $this;
    }

}
