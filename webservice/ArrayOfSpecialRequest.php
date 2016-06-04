<?php

class ArrayOfSpecialRequest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SpecialRequest[] $SpecialRequest
     */
    protected $SpecialRequest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SpecialRequest[]
     */
    public function getSpecialRequest()
    {
      return $this->SpecialRequest;
    }

    /**
     * @param SpecialRequest[] $SpecialRequest
     * @return ArrayOfSpecialRequest
     */
    public function setSpecialRequest(array $SpecialRequest = null)
    {
      $this->SpecialRequest = $SpecialRequest;
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
      return isset($this->SpecialRequest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SpecialRequest
     */
    public function offsetGet($offset)
    {
      return $this->SpecialRequest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SpecialRequest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SpecialRequest[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SpecialRequest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SpecialRequest Return the current element
     */
    public function current()
    {
      return current($this->SpecialRequest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SpecialRequest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SpecialRequest);
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
      reset($this->SpecialRequest);
    }

    /**
     * Countable implementation
     *
     * @return SpecialRequest Return count of elements
     */
    public function count()
    {
      return count($this->SpecialRequest);
    }

}
