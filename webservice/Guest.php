<?php

class Guest
{

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @var boolean $LeadGuest
     */
    protected $LeadGuest = null;

    /**
     * @var GuestType $GuestType
     */
    protected $GuestType = null;

    /**
     * @var int $GuestInRoom
     */
    protected $GuestInRoom = null;

    /**
     * @param int $Age
     * @param boolean $LeadGuest
     * @param GuestType $GuestType
     * @param int $GuestInRoom
     */
    public function __construct($Age, $LeadGuest, $GuestType, $GuestInRoom)
    {
      $this->Age = $Age;
      $this->LeadGuest = $LeadGuest;
      $this->GuestType = $GuestType;
      $this->GuestInRoom = $GuestInRoom;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return Guest
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return Guest
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return Guest
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return Guest
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLeadGuest()
    {
      return $this->LeadGuest;
    }

    /**
     * @param boolean $LeadGuest
     * @return Guest
     */
    public function setLeadGuest($LeadGuest)
    {
      $this->LeadGuest = $LeadGuest;
      return $this;
    }

    /**
     * @return GuestType
     */
    public function getGuestType()
    {
      return $this->GuestType;
    }

    /**
     * @param GuestType $GuestType
     * @return Guest
     */
    public function setGuestType($GuestType)
    {
      $this->GuestType = $GuestType;
      return $this;
    }

    /**
     * @return int
     */
    public function getGuestInRoom()
    {
      return $this->GuestInRoom;
    }

    /**
     * @param int $GuestInRoom
     * @return Guest
     */
    public function setGuestInRoom($GuestInRoom)
    {
      $this->GuestInRoom = $GuestInRoom;
      return $this;
    }

}
