<?php

class ArrayOfRoomReq implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomReq[] $RoomReq
     */
    protected $RoomReq = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomReq[]
     */
    public function getRoomReq()
    {
      return $this->RoomReq;
    }

    /**
     * @param RoomReq[] $RoomReq
     * @return ArrayOfRoomReq
     */
    public function setRoomReq(array $RoomReq = null)
    {
      $this->RoomReq = $RoomReq;
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
      return isset($this->RoomReq[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomReq
     */
    public function offsetGet($offset)
    {
      return $this->RoomReq[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomReq $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->RoomReq[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->RoomReq[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomReq Return the current element
     */
    public function current()
    {
      return current($this->RoomReq);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoomReq);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoomReq);
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
      reset($this->RoomReq);
    }

    /**
     * Countable implementation
     *
     * @return RoomReq Return count of elements
     */
    public function count()
    {
      return count($this->RoomReq);
    }

}
