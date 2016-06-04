<?php

class ArrayOfRoomDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomDetails[] $RoomDetails
     */
    protected $RoomDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomDetails[]
     */
    public function getRoomDetails()
    {
      return $this->RoomDetails;
    }

    /**
     * @param RoomDetails[] $RoomDetails
     * @return ArrayOfRoomDetails
     */
    public function setRoomDetails(array $RoomDetails = null)
    {
      $this->RoomDetails = $RoomDetails;
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
      return isset($this->RoomDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomDetails
     */
    public function offsetGet($offset)
    {
      return $this->RoomDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->RoomDetails[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->RoomDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomDetails Return the current element
     */
    public function current()
    {
      return current($this->RoomDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoomDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoomDetails);
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
      reset($this->RoomDetails);
    }

    /**
     * Countable implementation
     *
     * @return RoomDetails Return count of elements
     */
    public function count()
    {
      return count($this->RoomDetails);
    }

}
