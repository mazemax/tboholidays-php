<?php

class ArrayOfRequestedRooms implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RequestedRooms[] $HotelRoom
     */
    protected $HotelRoom = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestedRooms[]
     */
    public function getHotelRoom()
    {
      return $this->HotelRoom;
    }

    /**
     * @param RequestedRooms[] $HotelRoom
     * @return ArrayOfRequestedRooms
     */
    public function setHotelRoom(array $HotelRoom = null)
    {
      $this->HotelRoom = $HotelRoom;
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
      return isset($this->HotelRoom[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RequestedRooms
     */
    public function offsetGet($offset)
    {
      return $this->HotelRoom[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RequestedRooms $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->HotelRoom[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->HotelRoom[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RequestedRooms Return the current element
     */
    public function current()
    {
      return current($this->HotelRoom);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelRoom);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelRoom);
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
      reset($this->HotelRoom);
    }

    /**
     * Countable implementation
     *
     * @return RequestedRooms Return count of elements
     */
    public function count()
    {
      return count($this->HotelRoom);
    }

}
