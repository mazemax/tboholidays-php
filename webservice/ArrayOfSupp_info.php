<?php

class ArrayOfSupp_info implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Supp_info[] $Supp_info
     */
    protected $Supp_info = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Supp_info[]
     */
    public function getSupp_info()
    {
      return $this->Supp_info;
    }

    /**
     * @param Supp_info[] $Supp_info
     * @return ArrayOfSupp_info
     */
    public function setSupp_info(array $Supp_info = null)
    {
      $this->Supp_info = $Supp_info;
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
      return isset($this->Supp_info[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Supp_info
     */
    public function offsetGet($offset)
    {
      return $this->Supp_info[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Supp_info $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Supp_info[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Supp_info[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Supp_info Return the current element
     */
    public function current()
    {
      return current($this->Supp_info);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Supp_info);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Supp_info);
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
      reset($this->Supp_info);
    }

    /**
     * Countable implementation
     *
     * @return Supp_info Return count of elements
     */
    public function count()
    {
      return count($this->Supp_info);
    }

}
