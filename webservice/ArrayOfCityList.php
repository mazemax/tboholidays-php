<?php

class ArrayOfCityList implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CityList[] $City
     */
    protected $City = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CityList[]
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param CityList[] $City
     * @return ArrayOfCityList
     */
    public function setCity(array $City = null)
    {
      $this->City = $City;
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
      return isset($this->City[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CityList
     */
    public function offsetGet($offset)
    {
      return $this->City[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CityList $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->City[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->City[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CityList Return the current element
     */
    public function current()
    {
      return current($this->City);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->City);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->City);
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
      reset($this->City);
    }

    /**
     * Countable implementation
     *
     * @return CityList Return count of elements
     */
    public function count()
    {
      return count($this->City);
    }

}
