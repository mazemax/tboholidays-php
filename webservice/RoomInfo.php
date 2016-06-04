<?php

class RoomInfo
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfString6 $Images
     */
    protected $Images = null;

    /**
     * @var string $RoomName
     */
    protected $RoomName = null;

    /**
     * @var string $RoomTypeCode
     */
    protected $RoomTypeCode = null;

    /**
     * @param string $RoomName
     * @param string $RoomTypeCode
     */
    public function __construct($RoomName, $RoomTypeCode)
    {
      $this->RoomName = $RoomName;
      $this->RoomTypeCode = $RoomTypeCode;
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
     * @return RoomInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfString6
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfString6 $Images
     * @return RoomInfo
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomName()
    {
      return $this->RoomName;
    }

    /**
     * @param string $RoomName
     * @return RoomInfo
     */
    public function setRoomName($RoomName)
    {
      $this->RoomName = $RoomName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeCode()
    {
      return $this->RoomTypeCode;
    }

    /**
     * @param string $RoomTypeCode
     * @return RoomInfo
     */
    public function setRoomTypeCode($RoomTypeCode)
    {
      $this->RoomTypeCode = $RoomTypeCode;
      return $this;
    }

}
