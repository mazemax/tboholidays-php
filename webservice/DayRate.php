<?php

class DayRate
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var float $BaseFare
     */
    protected $BaseFare = null;

    /**
     * @param \DateTime $Date
     * @param float $BaseFare
     */
    public function __construct(\DateTime $Date, $BaseFare)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->BaseFare = $BaseFare;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return DayRate
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getBaseFare()
    {
      return $this->BaseFare;
    }

    /**
     * @param float $BaseFare
     * @return DayRate
     */
    public function setBaseFare($BaseFare)
    {
      $this->BaseFare = $BaseFare;
      return $this;
    }

}
