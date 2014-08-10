<?php namespace Kayladnls\Immutables;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;

/**
 * Class ImmutableArray
 * @package Kayladnls\Immutables
 */
class ImmutableArray implements Countable, ArrayAccess, IteratorAggregate
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    final public function count()
    {
        return count($this->items);
    }

    /**
     * @param mixed $key
     * @return bool
     */
    final public function offsetExists($key)
    {
        return array_key_exists($key, $this->items);
    }

    /**
     * @param mixed $key
     * @return mixed
     */
    final public function offsetGet($key)
    {
        return $this->items[$key];
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @throws CannotModifyImmutable
     */
    final public function offsetSet($key, $value)
    {
        throw new CannotModifyImmutable;
    }

    /**
     * @param mixed $key
     * @throws CannotModifyImmutable
     */
    final public function offsetUnset($key)
    {
        throw new CannotModifyImmutable;
    }

    /**
     * @return ArrayIterator
     */
    final public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}
