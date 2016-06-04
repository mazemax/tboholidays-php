<?php

class CountryListResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfCountryList $CountryList
     */
    protected $CountryList = null;

    /**
     * @param ResponseStatus $Status
     * @param ArrayOfCountryList $CountryList
     */
    public function __construct($Status, $CountryList)
    {
      $this->Status = $Status;
      $this->CountryList = $CountryList;
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
     * @return CountryListResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfCountryList
     */
    public function getCountryList()
    {
      return $this->CountryList;
    }

    /**
     * @param ArrayOfCountryList $CountryList
     * @return CountryListResponse
     */
    public function setCountryList($CountryList)
    {
      $this->CountryList = $CountryList;
      return $this;
    }

}
