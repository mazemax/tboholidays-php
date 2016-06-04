<?php

class RoomCombination
{

    /**
     * @var int[] $RoomIndex
     */
    protected $RoomIndex = null;

    /**
     * @var string $TestElement
     */
    protected $TestElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getRoomIndex()
    {
      return $this->RoomIndex;
    }

    /**
     * @param int[] $RoomIndex
     * @return RoomCombination
     */
    public function setRoomIndex(array $RoomIndex = null)
    {
      $this->RoomIndex = $RoomIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getTestElement()
    {
      return $this->TestElement;
    }

    /**
     * @param string $TestElement
     * @return RoomCombination
     */
    public function setTestElement($TestElement)
    {
      $this->TestElement = $TestElement;
      return $this;
    }

}
