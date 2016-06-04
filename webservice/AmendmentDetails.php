<?php

class AmendmentDetails
{

    /**
     * @var float $BeforeAmendmentPrice
     */
    protected $BeforeAmendmentPrice = null;

    /**
     * @var float $AfterAmendmentPrice
     */
    protected $AfterAmendmentPrice = null;

    /**
     * @var float $CreditNoteAmount
     */
    protected $CreditNoteAmount = null;

    /**
     * @var float $DebitNoteAmount
     */
    protected $DebitNoteAmount = null;

    /**
     * @param float $BeforeAmendmentPrice
     * @param float $AfterAmendmentPrice
     * @param float $CreditNoteAmount
     * @param float $DebitNoteAmount
     */
    public function __construct($BeforeAmendmentPrice, $AfterAmendmentPrice, $CreditNoteAmount, $DebitNoteAmount)
    {
      $this->BeforeAmendmentPrice = $BeforeAmendmentPrice;
      $this->AfterAmendmentPrice = $AfterAmendmentPrice;
      $this->CreditNoteAmount = $CreditNoteAmount;
      $this->DebitNoteAmount = $DebitNoteAmount;
    }

    /**
     * @return float
     */
    public function getBeforeAmendmentPrice()
    {
      return $this->BeforeAmendmentPrice;
    }

    /**
     * @param float $BeforeAmendmentPrice
     * @return AmendmentDetails
     */
    public function setBeforeAmendmentPrice($BeforeAmendmentPrice)
    {
      $this->BeforeAmendmentPrice = $BeforeAmendmentPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getAfterAmendmentPrice()
    {
      return $this->AfterAmendmentPrice;
    }

    /**
     * @param float $AfterAmendmentPrice
     * @return AmendmentDetails
     */
    public function setAfterAmendmentPrice($AfterAmendmentPrice)
    {
      $this->AfterAmendmentPrice = $AfterAmendmentPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getCreditNoteAmount()
    {
      return $this->CreditNoteAmount;
    }

    /**
     * @param float $CreditNoteAmount
     * @return AmendmentDetails
     */
    public function setCreditNoteAmount($CreditNoteAmount)
    {
      $this->CreditNoteAmount = $CreditNoteAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getDebitNoteAmount()
    {
      return $this->DebitNoteAmount;
    }

    /**
     * @param float $DebitNoteAmount
     * @return AmendmentDetails
     */
    public function setDebitNoteAmount($DebitNoteAmount)
    {
      $this->DebitNoteAmount = $DebitNoteAmount;
      return $this;
    }

}
