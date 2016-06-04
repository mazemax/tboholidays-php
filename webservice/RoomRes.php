<?php

class RoomRes
{

    /**
     * @var AmendGuestRes[] $Guest
     */
    protected $Guest = null;

    /**
     * @var RoomRequested $Amended
     */
    protected $Amended = null;

    /**
     * @param RoomRequested $Amended
     */
    public function __construct($Amended)
    {
      $this->Amended = $Amended;
    }

    /**
     * @return AmendGuestRes[]
     */
    public function getGuest()
    {
      return $this->Guest;
    }

    /**
     * @param AmendGuestRes[] $Guest
     * @return RoomRes
     */
    public function setGuest(array $Guest = null)
    {
      $this->Guest = $Guest;
      return $this;
    }

    /**
     * @return RoomRequested
     */
    public function getAmended()
    {
      return $this->Amended;
    }

    /**
     * @param RoomRequested $Amended
     * @return RoomRes
     */
    public function setAmended($Amended)
    {
      $this->Amended = $Amended;
      return $this;
    }

}
