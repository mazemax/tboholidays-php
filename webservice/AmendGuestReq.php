<?php

class AmendGuestReq
{

    /**
     * @var AmendActionReq $Action
     */
    protected $Action = null;

    /**
     * @var string $ExistingName
     */
    protected $ExistingName = null;

    /**
     * @var GuestType $GuestType
     */
    protected $GuestType = null;

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
     * @param AmendActionReq $Action
     * @param string $ExistingName
     * @param GuestType $GuestType
     * @param string $Title
     * @param string $FirstName
     * @param string $LastName
     * @param int $Age
     */
    public function __construct($Action, $ExistingName, $GuestType, $Title, $FirstName, $LastName, $Age)
    {
      $this->Action = $Action;
      $this->ExistingName = $ExistingName;
      $this->GuestType = $GuestType;
      $this->Title = $Title;
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Age = $Age;
    }

    /**
     * @return AmendActionReq
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param AmendActionReq $Action
     * @return AmendGuestReq
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getExistingName()
    {
      return $this->ExistingName;
    }

    /**
     * @param string $ExistingName
     * @return AmendGuestReq
     */
    public function setExistingName($ExistingName)
    {
      $this->ExistingName = $ExistingName;
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
     * @return AmendGuestReq
     */
    public function setGuestType($GuestType)
    {
      $this->GuestType = $GuestType;
      return $this;
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
     * @return AmendGuestReq
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
     * @return AmendGuestReq
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
     * @return AmendGuestReq
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
     * @return AmendGuestReq
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
