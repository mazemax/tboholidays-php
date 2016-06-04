<?php

class AOTNumbers
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Contact
     */
    protected $Contact = null;

    /**
     * @var string $IntlCall
     */
    protected $IntlCall = null;

    /**
     * @var string $DomesticCall
     */
    protected $DomesticCall = null;

    /**
     * @var string $LocalCall
     */
    protected $LocalCall = null;

    /**
     * @var string $OfficeHours
     */
    protected $OfficeHours = null;

    /**
     * @var string $Emergency
     */
    protected $Emergency = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return AOTNumbers
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param string $Contact
     * @return AOTNumbers
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntlCall()
    {
      return $this->IntlCall;
    }

    /**
     * @param string $IntlCall
     * @return AOTNumbers
     */
    public function setIntlCall($IntlCall)
    {
      $this->IntlCall = $IntlCall;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomesticCall()
    {
      return $this->DomesticCall;
    }

    /**
     * @param string $DomesticCall
     * @return AOTNumbers
     */
    public function setDomesticCall($DomesticCall)
    {
      $this->DomesticCall = $DomesticCall;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalCall()
    {
      return $this->LocalCall;
    }

    /**
     * @param string $LocalCall
     * @return AOTNumbers
     */
    public function setLocalCall($LocalCall)
    {
      $this->LocalCall = $LocalCall;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfficeHours()
    {
      return $this->OfficeHours;
    }

    /**
     * @param string $OfficeHours
     * @return AOTNumbers
     */
    public function setOfficeHours($OfficeHours)
    {
      $this->OfficeHours = $OfficeHours;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmergency()
    {
      return $this->Emergency;
    }

    /**
     * @param string $Emergency
     * @return AOTNumbers
     */
    public function setEmergency($Emergency)
    {
      $this->Emergency = $Emergency;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return AOTNumbers
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
