<?php

class AvailabilityAndPricingResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var boolean $AvailableForBook
     */
    protected $AvailableForBook = null;

    /**
     * @var boolean $AvailableForConfirmBook
     */
    protected $AvailableForConfirmBook = null;

    /**
     * @var boolean $CancellationPoliciesAvailable
     */
    protected $CancellationPoliciesAvailable = null;

    /**
     * @var HotelCancellationPolicies $HotelCancellationPolicies
     */
    protected $HotelCancellationPolicies = null;

    /**
     * @var PriceVerification $PriceVerification
     */
    protected $PriceVerification = null;

    /**
     * @var AccountInfo $AccountInfo
     */
    protected $AccountInfo = null;

    /**
     * @var HotelDetailsVerification $HotelDetailsVerification
     */
    protected $HotelDetailsVerification = null;

    /**
     * @param ResponseStatus $Status
     * @param int $ResultIndex
     * @param boolean $AvailableForBook
     * @param boolean $AvailableForConfirmBook
     * @param boolean $CancellationPoliciesAvailable
     * @param HotelCancellationPolicies $HotelCancellationPolicies
     * @param PriceVerification $PriceVerification
     * @param AccountInfo $AccountInfo
     * @param HotelDetailsVerification $HotelDetailsVerification
     */
    public function __construct($Status, $ResultIndex, $AvailableForBook, $AvailableForConfirmBook, $CancellationPoliciesAvailable, $HotelCancellationPolicies, $PriceVerification, $AccountInfo, $HotelDetailsVerification)
    {
      $this->Status = $Status;
      $this->ResultIndex = $ResultIndex;
      $this->AvailableForBook = $AvailableForBook;
      $this->AvailableForConfirmBook = $AvailableForConfirmBook;
      $this->CancellationPoliciesAvailable = $CancellationPoliciesAvailable;
      $this->HotelCancellationPolicies = $HotelCancellationPolicies;
      $this->PriceVerification = $PriceVerification;
      $this->AccountInfo = $AccountInfo;
      $this->HotelDetailsVerification = $HotelDetailsVerification;
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
     * @return AvailabilityAndPricingResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultIndex()
    {
      return $this->ResultIndex;
    }

    /**
     * @param int $ResultIndex
     * @return AvailabilityAndPricingResponse
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableForBook()
    {
      return $this->AvailableForBook;
    }

    /**
     * @param boolean $AvailableForBook
     * @return AvailabilityAndPricingResponse
     */
    public function setAvailableForBook($AvailableForBook)
    {
      $this->AvailableForBook = $AvailableForBook;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableForConfirmBook()
    {
      return $this->AvailableForConfirmBook;
    }

    /**
     * @param boolean $AvailableForConfirmBook
     * @return AvailabilityAndPricingResponse
     */
    public function setAvailableForConfirmBook($AvailableForConfirmBook)
    {
      $this->AvailableForConfirmBook = $AvailableForConfirmBook;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCancellationPoliciesAvailable()
    {
      return $this->CancellationPoliciesAvailable;
    }

    /**
     * @param boolean $CancellationPoliciesAvailable
     * @return AvailabilityAndPricingResponse
     */
    public function setCancellationPoliciesAvailable($CancellationPoliciesAvailable)
    {
      $this->CancellationPoliciesAvailable = $CancellationPoliciesAvailable;
      return $this;
    }

    /**
     * @return HotelCancellationPolicies
     */
    public function getHotelCancellationPolicies()
    {
      return $this->HotelCancellationPolicies;
    }

    /**
     * @param HotelCancellationPolicies $HotelCancellationPolicies
     * @return AvailabilityAndPricingResponse
     */
    public function setHotelCancellationPolicies($HotelCancellationPolicies)
    {
      $this->HotelCancellationPolicies = $HotelCancellationPolicies;
      return $this;
    }

    /**
     * @return PriceVerification
     */
    public function getPriceVerification()
    {
      return $this->PriceVerification;
    }

    /**
     * @param PriceVerification $PriceVerification
     * @return AvailabilityAndPricingResponse
     */
    public function setPriceVerification($PriceVerification)
    {
      $this->PriceVerification = $PriceVerification;
      return $this;
    }

    /**
     * @return AccountInfo
     */
    public function getAccountInfo()
    {
      return $this->AccountInfo;
    }

    /**
     * @param AccountInfo $AccountInfo
     * @return AvailabilityAndPricingResponse
     */
    public function setAccountInfo($AccountInfo)
    {
      $this->AccountInfo = $AccountInfo;
      return $this;
    }

    /**
     * @return HotelDetailsVerification
     */
    public function getHotelDetailsVerification()
    {
      return $this->HotelDetailsVerification;
    }

    /**
     * @param HotelDetailsVerification $HotelDetailsVerification
     * @return AvailabilityAndPricingResponse
     */
    public function setHotelDetailsVerification($HotelDetailsVerification)
    {
      $this->HotelDetailsVerification = $HotelDetailsVerification;
      return $this;
    }

}
