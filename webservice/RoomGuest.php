<?php

class RoomGuest
{

    /**
     * @var ArrayOfInt $ChildAge
     */
    protected $ChildAge = null;

    /**
     * @var int $AdultCount
     */
    protected $AdultCount = null;

    /**
     * @var int $ChildCount
     */
    protected $ChildCount = null;

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
     * @return ArrayOfInt
     */
    public function getChildAge()
    {
      return $this->ChildAge;
    }

    /**
     * @param ArrayOfInt $ChildAge
     * @return RoomGuest
     */
    public function setChildAge($ChildAge)
    {
      $this->ChildAge = $ChildAge;
      return $this;
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
     * @return RoomGuest
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
     * @return RoomGuest
     */
    public function setChildCount($ChildCount)
    {
      $this->ChildCount = $ChildCount;
      return $this;
    }

}
