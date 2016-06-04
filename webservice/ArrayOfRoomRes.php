<?php

class ArrayOfRoomRes implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomRes[] $RoomRes
     */
    protected $RoomRes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomRes[]
     */
    public function getRoomRes()
    {
      return $this->RoomRes;
    }

    /**
     * @param RoomRes[] $RoomRes
     * @return ArrayOfRoomRes
     */
    public function setRoomRes(array $RoomRes = null)
    {
      $this->RoomRes = $RoomRes;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->RoomRes[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomRes
     */
    public function offsetGet($offset)
    {
      return $this->RoomRes[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomRes $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->RoomRes[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->RoomRes[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomRes Return the current element
     */
    public function current()
    {
      return current($this->RoomRes);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoomRes);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoomRes);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->RoomRes);
    }

    /**
     * Countable implementation
     *
     * @return RoomRes Return count of elements
     */
    public function count()
    {
      return count($this->RoomRes);
    }

}
