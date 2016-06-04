<?php

class AmendGuestRes
{

    /**
     * @var AmendActionRes $Action
     */
    protected $Action = null;

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
     * @param AmendActionRes $Action
     * @param GuestType $GuestType
     * @param string $Title
     * @param string $FirstName
     * @param string $LastName
     * @param int $Age
     */
    public function __construct($Action, $GuestType, $Title, $FirstName, $LastName, $Age)
    {
      $this->Action = $Action;
      $this->GuestType = $GuestType;
      $this->Title = $Title;
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Age = $Age;
    }

    /**
     * @return AmendActionRes
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param AmendActionRes $Action
     * @return AmendGuestRes
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
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
     * @return AmendGuestRes
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
     * @return AmendGuestRes
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
     * @return AmendGuestRes
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
     * @return AmendGuestRes
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
     * @return AmendGuestRes
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
