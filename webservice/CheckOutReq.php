<?php

class CheckOutReq
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @param \DateTime $Date
     */
    public function __construct(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return CheckOutReq
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

}
