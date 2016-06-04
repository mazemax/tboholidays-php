<?php

class RoomDetails
{

    /**
     * @var int $AdultCount
     */
    protected $AdultCount = null;

    /**
     * @var int $ChildCount
     */
    protected $ChildCount = null;

    /**
     * @var int[] $ChildAge
     */
    protected $ChildAge = null;

    /**
     * @var string $RoomName
     */
    protected $RoomName = null;

    /**
     * @var string[] $Ameneties
     */
    protected $Ameneties = null;

    /**
     * @var ArrayOfGuest $GuestInfo
     */
    protected $GuestInfo = null;

    /**
     * @var string $Inclusion
     */
    protected $Inclusion = null;

    /**
     * @var string $RoomPromtion
     */
    protected $RoomPromtion = null;

    /**
     * @var string $RoomInstructions
     */
    protected $RoomInstructions = null;

    /**
     * @var ArrayOfSupp_info $Supplements
     */
    protected $Supplements = null;

    /**
     * @var RoomRate $RoomRate
     */
    protected $RoomRate = null;

    /**
     * @var string $RoomEssentialInfo
     */
    protected $RoomEssentialInfo = null;

    /**
     * @param int $AdultCount
     * @param int $ChildCount
     */
    public function __construct($AdultCount, $ChildCount)
    {
      $this->AdultCount = $AdultCount;
      $this->ChildCount = $ChildCount;
    }

    /**
     * @return int
     */
    public function getAdultCount()
    {
      return $this->AdultCount;
    }

    /**
     * @param int $AdultCount
     * @return RoomDetails
     */
    public function setAdultCount($AdultCount)
    {
      $this->AdultCount = $AdultCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildCount()
    {
      return $this->ChildCount;
    }

    /**
     * @param int $ChildCount
     * @return RoomDetails
     */
    public function setChildCount($ChildCount)
    {
      $this->ChildCount = $ChildCount;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChildAge()
    {
      return $this->ChildAge;
    }

    /**
     * @param int[] $ChildAge
     * @return RoomDetails
     */
    public function setChildAge(array $ChildAge = null)
    {
      $this->ChildAge = $ChildAge;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomName()
    {
      return $this->RoomName;
    }

    /**
     * @param string $RoomName
     * @return RoomDetails
     */
    public function setRoomName($RoomName)
    {
      $this->RoomName = $RoomName;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAmeneties()
    {
      return $this->Ameneties;
    }

    /**
     * @param string[] $Ameneties
     * @return RoomDetails
     */
    public function setAmeneties(array $Ameneties = null)
    {
      $this->Ameneties = $Ameneties;
      return $this;
    }

    /**
     * @return ArrayOfGuest
     */
    public function getGuestInfo()
    {
      return $this->GuestInfo;
    }

    /**
     * @param ArrayOfGuest $GuestInfo
     * @return RoomDetails
     */
    public function setGuestInfo($GuestInfo)
    {
      $this->GuestInfo = $GuestInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getInclusion()
    {
      return $this->Inclusion;
    }

    /**
     * @param string $Inclusion
     * @return RoomDetails
     */
    public function setInclusion($Inclusion)
    {
      $this->Inclusion = $Inclusion;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomPromtion()
    {
      return $this->RoomPromtion;
    }

    /**
     * @param string $RoomPromtion
     * @return RoomDetails
     */
    public function setRoomPromtion($RoomPromtion)
    {
      $this->RoomPromtion = $RoomPromtion;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomInstructions()
    {
      return $this->RoomInstructions;
    }

    /**
     * @param string $RoomInstructions
     * @return RoomDetails
     */
    public function setRoomInstructions($RoomInstructions)
    {
      $this->RoomInstructions = $RoomInstructions;
      return $this;
    }

    /**
     * @return ArrayOfSupp_info
     */
    public function getSupplements()
    {
      return $this->Supplements;
    }

    /**
     * @param ArrayOfSupp_info $Supplements
     * @return RoomDetails
     */
    public function setSupplements($Supplements)
    {
      $this->Supplements = $Supplements;
      return $this;
    }

    /**
     * @return RoomRate
     */
    public function getRoomRate()
    {
      return $this->RoomRate;
    }

    /**
     * @param RoomRate $RoomRate
     * @return RoomDetails
     */
    public function setRoomRate($RoomRate)
    {
      $this->RoomRate = $RoomRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomEssentialInfo()
    {
      return $this->RoomEssentialInfo;
    }

    /**
     * @param string $RoomEssentialInfo
     * @return RoomDetails
     */
    public function setRoomEssentialInfo($RoomEssentialInfo)
    {
      $this->RoomEssentialInfo = $RoomEssentialInfo;
      return $this;
    }

}
