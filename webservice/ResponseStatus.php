<?php

class ResponseStatus
{

    /**
     * @var string $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param string $StatusCode
     * @return ResponseStatus
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return ResponseStatus
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return ResponseStatus
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
