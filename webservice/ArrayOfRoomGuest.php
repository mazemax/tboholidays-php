<?php

class ArrayOfRoomGuest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomGuest[] $RoomGuest
     */
    protected $RoomGuest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomGuest[]
     */
    public function getRoomGuest()
    {
      return $this->RoomGuest;
    }

    /**
     * @param RoomGuest[] $RoomGuest
     * @return ArrayOfRoomGuest
     */
    public function setRoomGuest(array $RoomGuest = null)
    {
      $this->RoomGuest = $RoomGuest;
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
      return isset($this->RoomGuest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomGuest
     */
    public function offsetGet($offset)
    {
      return $this->RoomGuest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomGuest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->RoomGuest[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->RoomGuest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomGuest Return the current element
     */
    public function current()
    {
      return current($this->RoomGuest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoomGuest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoomGuest);
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
      reset($this->RoomGuest);
    }

    /**
     * Countable implementation
     *
     * @return RoomGuest Return count of elements
     */
    public function count()
    {
      return count($this->RoomGuest);
    }

}
