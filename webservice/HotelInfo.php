<?php

class HotelInfo
{

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var string $HotelPicture
     */
    protected $HotelPicture = null;

    /**
     * @var string $HotelDescription
     */
    protected $HotelDescription = null;

    /**
     * @var float $Latitude
     */
    protected $Latitude = null;

    /**
     * @var float $Longitude
     */
    protected $Longitude = null;

    /**
     * @var string $HotelAddress
     */
    protected $HotelAddress = null;

    /**
     * @var string $HotelContactNo
     */
    protected $HotelContactNo = null;

    /**
     * @var HotelInfoHotelRating $Rating
     */
    protected $Rating = null;

    /**
     * @var string $HotelPromotion
     */
    protected $HotelPromotion = null;

    /**
     * @var string $TripAdvisorRating
     */
    protected $TripAdvisorRating = null;

    /**
     * @var string $TripAdvisorReviewURL
     */
    protected $TripAdvisorReviewURL = null;

    /**
     * @param HotelInfoHotelRating $Rating
     */
    public function __construct($Rating)
    {
      $this->Rating = $Rating;
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
     * @return HotelInfo
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
     * @return HotelInfo
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelPicture()
    {
      return $this->HotelPicture;
    }

    /**
     * @param string $HotelPicture
     * @return HotelInfo
     */
    public function setHotelPicture($HotelPicture)
    {
      $this->HotelPicture = $HotelPicture;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelDescription()
    {
      return $this->HotelDescription;
    }

    /**
     * @param string $HotelDescription
     * @return HotelInfo
     */
    public function setHotelDescription($HotelDescription)
    {
      $this->HotelDescription = $HotelDescription;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param float $Latitude
     * @return HotelInfo
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param float $Longitude
     * @return HotelInfo
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelAddress()
    {
      return $this->HotelAddress;
    }

    /**
     * @param string $HotelAddress
     * @return HotelInfo
     */
    public function setHotelAddress($HotelAddress)
    {
      $this->HotelAddress = $HotelAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelContactNo()
    {
      return $this->HotelContactNo;
    }

    /**
     * @param string $HotelContactNo
     * @return HotelInfo
     */
    public function setHotelContactNo($HotelContactNo)
    {
      $this->HotelContactNo = $HotelContactNo;
      return $this;
    }

    /**
     * @return HotelInfoHotelRating
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param HotelInfoHotelRating $Rating
     * @return HotelInfo
     */
    public function setRating($Rating)
    {
      $this->Rating = $Rating;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelPromotion()
    {
      return $this->HotelPromotion;
    }

    /**
     * @param string $HotelPromotion
     * @return HotelInfo
     */
    public function setHotelPromotion($HotelPromotion)
    {
      $this->HotelPromotion = $HotelPromotion;
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
     * @return HotelInfo
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
     * @return HotelInfo
     */
    public function setTripAdvisorReviewURL($TripAdvisorReviewURL)
    {
      $this->TripAdvisorReviewURL = $TripAdvisorReviewURL;
      return $this;
    }

}
