<?php

class ArrayOfGuest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Guest[] $Guest
     */
    protected $Guest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Guest[]
     */
    public function getGuest()
    {
      return $this->Guest;
    }

    /**
     * @param Guest[] $Guest
     * @return ArrayOfGuest
     */
    public function setGuest(array $Guest = null)
    {
      $this->Guest = $Guest;
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
      return isset($this->Guest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Guest
     */
    public function offsetGet($offset)
    {
      return $this->Guest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Guest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Guest[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Guest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Guest Return the current element
     */
    public function current()
    {
      return current($this->Guest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Guest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Guest);
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
      reset($this->Guest);
    }

    /**
     * Countable implementation
     *
     * @return Guest Return count of elements
     */
    public function count()
    {
      return count($this->Guest);
    }

}
