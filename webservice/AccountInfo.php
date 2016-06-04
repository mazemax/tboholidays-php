<?php

class AccountInfo
{

    /**
     * @var AccountBalance $AgencyBalance
     */
    protected $AgencyBalance = null;

    /**
     * @var boolean $AgencyBlocked
     */
    protected $AgencyBlocked = null;

    /**
     * @param AccountBalance $AgencyBalance
     * @param boolean $AgencyBlocked
     */
    public function __construct($AgencyBalance, $AgencyBlocked)
    {
      $this->AgencyBalance = $AgencyBalance;
      $this->AgencyBlocked = $AgencyBlocked;
    }

    /**
     * @return AccountBalance
     */
    public function getAgencyBalance()
    {
      return $this->AgencyBalance;
    }

    /**
     * @param AccountBalance $AgencyBalance
     * @return AccountInfo
     */
    public function setAgencyBalance($AgencyBalance)
    {
      $this->AgencyBalance = $AgencyBalance;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAgencyBlocked()
    {
      return $this->AgencyBlocked;
    }

    /**
     * @param boolean $AgencyBlocked
     * @return AccountInfo
     */
    public function setAgencyBlocked($AgencyBlocked)
    {
      $this->AgencyBlocked = $AgencyBlocked;
      return $this;
    }

}
