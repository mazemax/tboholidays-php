<?php

class HotelCancellationPolicyResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var CancelPolicies $CancelPolicies
     */
    protected $CancelPolicies = null;

    /**
     * @var ArrayOfString2 $HotelNorms
     */
    protected $HotelNorms = null;

    /**
     * @param ResponseStatus $Status
     * @param CancelPolicies $CancelPolicies
     * @param ArrayOfString2 $HotelNorms
     */
    public function __construct($Status, $CancelPolicies, $HotelNorms)
    {
      $this->Status = $Status;
      $this->CancelPolicies = $CancelPolicies;
      $this->HotelNorms = $HotelNorms;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ResponseStatus $Status
     * @return HotelCancellationPolicyResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return HotelCancellationPolicyResponse
     */
    public function setCancelPolicies($CancelPolicies)
    {
      $this->CancelPolicies = $CancelPolicies;
      return $this;
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
     * @return HotelCancellationPolicyResponse
     */
    public function setHotelNorms($HotelNorms)
    {
      $this->HotelNorms = $HotelNorms;
      return $this;
    }

}
