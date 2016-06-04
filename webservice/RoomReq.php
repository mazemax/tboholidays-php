<?php

class RoomReq
{

    /**
     * @var AmendGuestReq[] $Guest
     */
    protected $Guest = null;

    /**
     * @var RoomRequested $Amend
     */
    protected $Amend = null;

    /**
     * @param RoomRequested $Amend
     */
    public function __construct($Amend)
    {
      $this->Amend = $Amend;
    }

    /**
     * @return AmendGuestReq[]
     */
    public function getGuest()
    {
      return $this->Guest;
    }

    /**
     * @param AmendGuestReq[] $Guest
     * @return RoomReq
     */
    public function setGuest(array $Guest = null)
    {
      $this->Guest = $Guest;
      return $this;
    }

    /**
     * @return RoomRequested
     */
    public function getAmend()
    {
      return $this->Amend;
    }

    /**
     * @param RoomRequested $Amend
     * @return RoomReq
     */
    public function setAmend($Amend)
    {
      $this->Amend = $Amend;
      return $this;
    }

}
