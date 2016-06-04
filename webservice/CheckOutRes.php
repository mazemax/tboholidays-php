<?php

class CheckOutRes
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var DateActionRes $DateAction
     */
    protected $DateAction = null;

    /**
     * @param \DateTime $Date
     * @param DateActionRes $DateAction
     */
    public function __construct(\DateTime $Date, $DateAction)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->DateAction = $DateAction;
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
     * @return CheckOutRes
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return DateActionRes
     */
    public function getDateAction()
    {
      return $this->DateAction;
    }

    /**
     * @param DateActionRes $DateAction
     * @return CheckOutRes
     */
    public function setDateAction($DateAction)
    {
      $this->DateAction = $DateAction;
      return $this;
    }

}
