<?php

class AuthenticationData
{

    /**
     * @var string $SiteName
     */
    protected $SiteName = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param string $UserName
     * @param string $Password
     */
    public function __construct($UserName, $Password)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
      return $this->SiteName;
    }

    /**
     * @param string $SiteName
     * @return AuthenticationData
     */
    public function setSiteName($SiteName)
    {
      $this->SiteName = $SiteName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return AuthenticationData
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return AuthenticationData
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
