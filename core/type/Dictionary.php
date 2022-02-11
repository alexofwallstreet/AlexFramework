<?php

namespace app\core\type;

class Dictionary implements \IteratorAggregate, \ArrayAccess, \Countable
{
    protected array $container = [];
    protected int $count = 0;

    public function get($key)
    {
        return $this->container[$key] ?? null;
    }

    public function set($key, $value)
    {
        $this->container[$key] = $value;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->container);
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    public function count(): int
    {
        return $this->count;
    }
}