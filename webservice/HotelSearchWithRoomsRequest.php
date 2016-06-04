<?php

class HotelSearchWithRoomsRequest
{

    /**
     * @var \DateTime $CheckInDate
     */
    protected $CheckInDate = null;

    /**
     * @var \DateTime $CheckOutDate
     */
    protected $CheckOutDate = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @var int $CityId
     */
    protected $CityId = null;

    /**
     * @var boolean $IsNearBySearchAllowed
     */
    protected $IsNearBySearchAllowed = null;

    /**
     * @var int $NoOfRooms
     */
    protected $NoOfRooms = null;

    /**
     * @var string $GuestNationality
     */
    protected $GuestNationality = null;

    /**
     * @var ArrayOfRoomGuest $RoomGuests
     */
    protected $RoomGuests = null;

    /**
     * @var string $PreferredCurrencyCode
     */
    protected $PreferredCurrencyCode = null;

    /**
     * @var int $ResultCount
     */
    protected $ResultCount = null;

    /**
     * @var Filters $Filters
     */
    protected $Filters = null;

    /**
     * @param \DateTime $CheckInDate
     * @param \DateTime $CheckOutDate
     * @param string $CountryName
     * @param string $CityName
     * @param int $CityId
     * @param boolean $IsNearBySearchAllowed
     * @param int $NoOfRooms
     * @param string $GuestNationality
     * @param ArrayOfRoomGuest $RoomGuests
     * @param string $PreferredCurrencyCode
     * @param int $ResultCount
     * @param Filters $Filters
     */
    public function __construct(\DateTime $CheckInDate, \DateTime $CheckOutDate, $CountryName, $CityName, $CityId, $IsNearBySearchAllowed, $NoOfRooms, $GuestNationality, $RoomGuests, $PreferredCurrencyCode, $ResultCount, $Filters)
    {
      $this->CheckInDate = $CheckInDate->format(\DateTime::ATOM);
      $this->CheckOutDate = $CheckOutDate->format(\DateTime::ATOM);
      $this->CountryName = $CountryName;
      $this->CityName = $CityName;
      $this->CityId = $CityId;
      $this->IsNearBySearchAllowed = $IsNearBySearchAllowed;
      $this->NoOfRooms = $NoOfRooms;
      $this->GuestNationality = $GuestNationality;
      $this->RoomGuests = $RoomGuests;
      $this->PreferredCurrencyCode = $PreferredCurrencyCode;
      $this->ResultCount = $ResultCount;
      $this->Filters = $Filters;
    }

    /**
     * @return \DateTime
     */
    public function getCheckInDate()
    {
      if ($this->CheckInDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckInDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckInDate
     * @return HotelSearchWithRoomsRequest
     */
    public function setCheckInDate(\DateTime $CheckInDate)
    {
      $this->CheckInDate = $CheckInDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckOutDate()
    {
      if ($this->CheckOutDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckOutDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckOutDate
     * @return HotelSearchWithRoomsRequest
     */
    public function setCheckOutDate(\DateTime $CheckOutDate)
    {
      $this->CheckOutDate = $CheckOutDate->format(\DateTime::ATOM);
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
     * @return HotelSearchWithRoomsRequest
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
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
     * @return HotelSearchWithRoomsRequest
     */
    public function setCityName($CityName)
    {
      $this->CityName = $CityName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
      return $this->CityId;
    }

    /**
     * @param int $CityId
     * @return HotelSearchWithRoomsRequest
     */
    public function setCityId($CityId)
    {
      $this->CityId = $CityId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNearBySearchAllowed()
    {
      return $this->IsNearBySearchAllowed;
    }

    /**
     * @param boolean $IsNearBySearchAllowed
     * @return HotelSearchWithRoomsRequest
     */
    public function setIsNearBySearchAllowed($IsNearBySearchAllowed)
    {
      $this->IsNearBySearchAllowed = $IsNearBySearchAllowed;
      return $this;
    }

    /**
     * @return int
     */
    public function getNoOfRooms()
    {
      return $this->NoOfRooms;
    }

    /**
     * @param int $NoOfRooms
     * @return HotelSearchWithRoomsRequest
     */
    public function setNoOfRooms($NoOfRooms)
    {
      $this->NoOfRooms = $NoOfRooms;
      return $this;
    }

    /**
     * @return string
     */
    public function getGuestNationality()
    {
      return $this->GuestNationality;
    }

    /**
     * @param string $GuestNationality
     * @return HotelSearchWithRoomsRequest
     */
    public function setGuestNationality($GuestNationality)
    {
      $this->GuestNationality = $GuestNationality;
      return $this;
    }

    /**
     * @return ArrayOfRoomGuest
     */
    public function getRoomGuests()
    {
      return $this->RoomGuests;
    }

    /**
     * @param ArrayOfRoomGuest $RoomGuests
     * @return HotelSearchWithRoomsRequest
     */
    public function setRoomGuests($RoomGuests)
    {
      $this->RoomGuests = $RoomGuests;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredCurrencyCode()
    {
      return $this->PreferredCurrencyCode;
    }

    /**
     * @param string $PreferredCurrencyCode
     * @return HotelSearchWithRoomsRequest
     */
    public function setPreferredCurrencyCode($PreferredCurrencyCode)
    {
      $this->PreferredCurrencyCode = $PreferredCurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultCount()
    {
      return $this->ResultCount;
    }

    /**
     * @param int $ResultCount
     * @return HotelSearchWithRoomsRequest
     */
    public function setResultCount($ResultCount)
    {
      $this->ResultCount = $ResultCount;
      return $this;
    }

    /**
     * @return Filters
     */
    public function getFilters()
    {
      return $this->Filters;
    }

    /**
     * @param Filters $Filters
     * @return HotelSearchWithRoomsRequest
     */
    public function setFilters($Filters)
    {
      $this->Filters = $Filters;
      return $this;
    }

}
