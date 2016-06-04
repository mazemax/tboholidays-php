<?php

class APIHotelDetails
{

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var ArrayOfString3 $Attractions
     */
    protected $Attractions = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

    /**
     * @var ArrayOfString4 $HotelFacilities
     */
    protected $HotelFacilities = null;

    /**
     * @var string $HotelPolicy
     */
    protected $HotelPolicy = null;

    /**
     * @var string $Image
     */
    protected $Image = null;

    /**
     * @var ArrayOfString5 $ImageUrls
     */
    protected $ImageUrls = null;

    /**
     * @var string $Map
     */
    protected $Map = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $PinCode
     */
    protected $PinCode = null;

    /**
     * @var ArrayOfRoomInfo $RoomInfo
     */
    protected $RoomInfo = null;

    /**
     * @var ArrayOfString7 $RoomFacilities
     */
    protected $RoomFacilities = null;

    /**
     * @var string $Services
     */
    protected $Services = null;

    /**
     * @var string $HotelWebsiteUrl
     */
    protected $HotelWebsiteUrl = null;

    /**
     * @var string $TripAdvisorRating
     */
    protected $TripAdvisorRating = null;

    /**
     * @var string $TripAdvisorReviewURL
     */
    protected $TripAdvisorReviewURL = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var HotelInfoHotelRating $HotelRating
     */
    protected $HotelRating = null;

    /**
     * @param string $HotelCode
     * @param string $HotelName
     * @param HotelInfoHotelRating $HotelRating
     */
    public function __construct($HotelCode, $HotelName, $HotelRating)
    {
      $this->HotelCode = $HotelCode;
      $this->HotelName = $HotelName;
      $this->HotelRating = $HotelRating;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return APIHotelDetails
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return ArrayOfString3
     */
    public function getAttractions()
    {
      return $this->Attractions;
    }

    /**
     * @param ArrayOfString3 $Attractions
     * @return APIHotelDetails
     */
    public function setAttractions($Attractions)
    {
      $this->Attractions = $Attractions;
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
     * @return APIHotelDetails
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
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
     * @return APIHotelDetails
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return APIHotelDetails
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->FaxNumber;
    }

    /**
     * @param string $FaxNumber
     * @return APIHotelDetails
     */
    public function setFaxNumber($FaxNumber)
    {
      $this->FaxNumber = $FaxNumber;
      return $this;
    }

    /**
     * @return ArrayOfString4
     */
    public function getHotelFacilities()
    {
      return $this->HotelFacilities;
    }

    /**
     * @param ArrayOfString4 $HotelFacilities
     * @return APIHotelDetails
     */
    public function setHotelFacilities($HotelFacilities)
    {
      $this->HotelFacilities = $HotelFacilities;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelPolicy()
    {
      return $this->HotelPolicy;
    }

    /**
     * @param string $HotelPolicy
     * @return APIHotelDetails
     */
    public function setHotelPolicy($HotelPolicy)
    {
      $this->HotelPolicy = $HotelPolicy;
      return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param string $Image
     * @return APIHotelDetails
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
    }

    /**
     * @return ArrayOfString5
     */
    public function getImageUrls()
    {
      return $this->ImageUrls;
    }

    /**
     * @param ArrayOfString5 $ImageUrls
     * @return APIHotelDetails
     */
    public function setImageUrls($ImageUrls)
    {
      $this->ImageUrls = $ImageUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getMap()
    {
      return $this->Map;
    }

    /**
     * @param string $Map
     * @return APIHotelDetails
     */
    public function setMap($Map)
    {
      $this->Map = $Map;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return APIHotelDetails
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinCode()
    {
      return $this->PinCode;
    }

    /**
     * @param string $PinCode
     * @return APIHotelDetails
     */
    public function setPinCode($PinCode)
    {
      $this->PinCode = $PinCode;
      return $this;
    }

    /**
     * @return ArrayOfRoomInfo
     */
    public function getRoomInfo()
    {
      return $this->RoomInfo;
    }

    /**
     * @param ArrayOfRoomInfo $RoomInfo
     * @return APIHotelDetails
     */
    public function setRoomInfo($RoomInfo)
    {
      $this->RoomInfo = $RoomInfo;
      return $this;
    }

    /**
     * @return ArrayOfString7
     */
    public function getRoomFacilities()
    {
      return $this->RoomFacilities;
    }

    /**
     * @param ArrayOfString7 $RoomFacilities
     * @return APIHotelDetails
     */
    public function setRoomFacilities($RoomFacilities)
    {
      $this->RoomFacilities = $RoomFacilities;
      return $this;
    }

    /**
     * @return string
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param string $Services
     * @return APIHotelDetails
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelWebsiteUrl()
    {
      return $this->HotelWebsiteUrl;
    }

    /**
     * @param string $HotelWebsiteUrl
     * @return APIHotelDetails
     */
    public function setHotelWebsiteUrl($HotelWebsiteUrl)
    {
      $this->HotelWebsiteUrl = $HotelWebsiteUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getTripAdvisorRating()
    {
      return $this->TripAdvisorRating;
    }

    /**
     * @param string $TripAdvisorRating
     * @return APIHotelDetails
     */
    public function setTripAdvisorRating($TripAdvisorRating)
    {
      $this->TripAdvisorRating = $TripAdvisorRating;
      return $this;
    }

    /**
     * @return string
     */
    public function getTripAdvisorReviewURL()
    {
      return $this->TripAdvisorReviewURL;
    }

    /**
     * @param string $TripAdvisorReviewURL
     * @return APIHotelDetails
     */
    public function setTripAdvisorReviewURL($TripAdvisorReviewURL)
    {
      $this->TripAdvisorReviewURL = $TripAdvisorReviewURL;
      return $this;
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
     * @return APIHotelDetails
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return APIHotelDetails
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return HotelInfoHotelRating
     */
    public function getHotelRating()
    {
      return $this->HotelRating;
    }

    /**
     * @param HotelInfoHotelRating $HotelRating
     * @return APIHotelDetails
     */
    public function setHotelRating($HotelRating)
    {
      $this->HotelRating = $HotelRating;
      return $this;
    }

}
