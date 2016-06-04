<?php

class ArrayOfRoomPriceRes implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomPriceRes[] $Room
     */
    protected $Room = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomPriceRes[]
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param RoomPriceRes[] $Room
     * @return ArrayOfRoomPriceRes
     */
    public function setRoom(array $Room = null)
    {
      $this->Room = $Room;
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
      return isset($this->Room[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomPriceRes
     */
    public function offsetGet($offset)
    {
      return $this->Room[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomPriceRes $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Room[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Room[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomPriceRes Return the current element
     */
    public function current()
    {
      return current($this->Room);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Room);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Room);
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
      reset($this->Room);
    }

    /**
     * Countable implementation
     *
     * @return RoomPriceRes Return count of elements
     */
    public function count()
    {
      return count($this->Room);
    }

}
