<?php

class HotelCancellationPolicies
{

    /**
     * @var ArrayOfString2 $HotelNorms
     */
    protected $HotelNorms = null;

    /**
     * @var CancelPolicies $CancelPolicies
     */
    protected $CancelPolicies = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString2
     */
    public function getHotelNorms()
    {
      return $this->HotelNorms;
    }

    /**
     * @param ArrayOfString2 $HotelNorms
     * @return HotelCancellationPolicies
     */
    public function setHotelNorms($HotelNorms)
    {
      $this->HotelNorms = $HotelNorms;
      return $this;
    }

    /**
     * @return CancelPolicies
     */
    public function getCancelPolicies()
    {
      return $this->CancelPolicies;
    }

    /**
     * @param CancelPolicies $CancelPolicies
     * @return HotelCancellationPolicies
     */
    public function setCancelPolicies($CancelPolicies)
    {
      $this->CancelPolicies = $CancelPolicies;
      return $this;
    }

}
