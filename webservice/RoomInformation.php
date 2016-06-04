<?php

class RoomInformation
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfString $ImageURLs
     */
    protected $ImageURLs = null;

    /**
     * @var ArrayOfString1 $Amenities
     */
    protected $Amenities = null;

    /**
     * @var string $SmokingPref
     */
    protected $SmokingPref = null;

    /**
     * @var string $MaxOccupancy
     */
    protected $MaxOccupancy = null;

    /**
     * @var string $MaxAge
     */
    protected $MaxAge = null;

    /**
     * @var string $MinAge
     */
    protected $MinAge = null;

    /**
     * @var string $MaxAdult
     */
    protected $MaxAdult = null;

    /**
     * @var string $MaxChild
     */
    protected $MaxChild = null;

    /**
     * @param string $SmokingPref
     * @param string $MaxOccupancy
     * @param string $MaxAge
     * @param string $MinAge
     * @param string $MaxAdult
     * @param string $MaxChild
     */
    public function __construct($SmokingPref, $MaxOccupancy, $MaxAge, $MinAge, $MaxAdult, $MaxChild)
    {
      $this->SmokingPref = $SmokingPref;
      $this->MaxOccupancy = $MaxOccupancy;
      $this->MaxAge = $MaxAge;
      $this->MinAge = $MinAge;
      $this->MaxAdult = $MaxAdult;
      $this->MaxChild = $MaxChild;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return RoomInformation
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getImageURLs()
    {
      return $this->ImageURLs;
    }

    /**
     * @param ArrayOfString $ImageURLs
     * @return RoomInformation
     */
    public function setImageURLs($ImageURLs)
    {
      $this->ImageURLs = $ImageURLs;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getAmenities()
    {
      return $this->Amenities;
    }

    /**
     * @param ArrayOfString1 $Amenities
     * @return RoomInformation
     */
    public function setAmenities($Amenities)
    {
      $this->Amenities = $Amenities;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmokingPref()
    {
      return $this->SmokingPref;
    }

    /**
     * @param string $SmokingPref
     * @return RoomInformation
     */
    public function setSmokingPref($SmokingPref)
    {
      $this->SmokingPref = $SmokingPref;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxOccupancy()
    {
      return $this->MaxOccupancy;
    }

    /**
     * @param string $MaxOccupancy
     * @return RoomInformation
     */
    public function setMaxOccupancy($MaxOccupancy)
    {
      $this->MaxOccupancy = $MaxOccupancy;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxAge()
    {
      return $this->MaxAge;
    }

    /**
     * @param string $MaxAge
     * @return RoomInformation
     */
    public function setMaxAge($MaxAge)
    {
      $this->MaxAge = $MaxAge;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinAge()
    {
      return $this->MinAge;
    }

    /**
     * @param string $MinAge
     * @return RoomInformation
     */
    public function setMinAge($MinAge)
    {
      $this->MinAge = $MinAge;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxAdult()
    {
      return $this->MaxAdult;
    }

    /**
     * @param string $MaxAdult
     * @return RoomInformation
     */
    public function setMaxAdult($MaxAdult)
    {
      $this->MaxAdult = $MaxAdult;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxChild()
    {
      return $this->MaxChild;
    }

    /**
     * @param string $MaxChild
     * @return RoomInformation
     */
    public function setMaxChild($MaxChild)
    {
      $this->MaxChild = $MaxChild;
      return $this;
    }

}
