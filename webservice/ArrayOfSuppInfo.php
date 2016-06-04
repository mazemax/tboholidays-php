<?php

class ArrayOfSuppInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SuppInfo[] $SuppInfo
     */
    protected $SuppInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SuppInfo[]
     */
    public function getSuppInfo()
    {
      return $this->SuppInfo;
    }

    /**
     * @param SuppInfo[] $SuppInfo
     * @return ArrayOfSuppInfo
     */
    public function setSuppInfo(array $SuppInfo = null)
    {
      $this->SuppInfo = $SuppInfo;
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
      return isset($this->SuppInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SuppInfo
     */
    public function offsetGet($offset)
    {
      return $this->SuppInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SuppInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SuppInfo[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SuppInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SuppInfo Return the current element
     */
    public function current()
    {
      return current($this->SuppInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SuppInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SuppInfo);
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
      reset($this->SuppInfo);
    }

    /**
     * Countable implementation
     *
     * @return SuppInfo Return count of elements
     */
    public function count()
    {
      return count($this->SuppInfo);
    }

}
