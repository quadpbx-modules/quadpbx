<?php

namespace QuadPBX\Core\Abstractions;

use ArrayAccess;
use JsonSerializable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

abstract class ModelAbstraction implements
    Arrayable,
    ArrayAccess,
    Jsonable,
    JsonSerializable
{
    /**
     * All data stored in the model.
     *
     * @var array
     */
    protected array $__all = [];

    /**
     * If no data is provided, don't load anything, it's an empty object
     *
     * @param null|array $data Data to load into the model
     *
     * @return void
     */
    public function __construct(?array $data = null)
    {
        if ($data) {
            $this->__load($data);
        }
    }

    /**
     * Return whatever is in the model
     *
     * @return array
     */
    protected function getAll()
    {
        return $this->__all;
    }

    /**
     * Only use this once. It'll overwrite this->all
     *
     * @param array $params Bulk loader
     *
     * @return $this
     */
    public function __load(array $params)
    {
        $this->__all = $params;
        foreach ($params as $key => $value) {
            $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * Get the value of a property by its key.
     *
     * @param mixed $key The key
     *
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->{$key})) {
            return $this->{$key};
        }
    }

    /**
     * Check if a property is set.
     *
     * @param mixed $key The key to check
     *
     * @return boolean
     */
    public function __isset($key)
    {
        return isset($this->{$key});
    }

    /**
     * Set a property by its key.
     *
     * @param mixed $key   The key to set
     * @param mixed $value The value to set
     *
     * @return void
     */
    public function __set($key, $value)
    {
        $this->{$key} = $value;
        $this->__all[$key] = $value;
    }

    /**
     * Update a property by its key.
     *
     * @param mixed $offset The key to update
     * @param mixed $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->{$offset} = $value;
    }

    /**
     * Check if a property exists by its key.
     *
     * @param mixed $offset key
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->{$offset});
    }

    /**
     * Unset a property by its key.
     *
     * @param mixed $offset The key to unset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->{$offset});
    }

    /**
     * Get a property by its key.
     *
     * @param mixed $offset The key to get
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->{$offset}) ? $this->{$offset} : null;
    }

    /**
     * Return the model as an array.
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * Return the model as a JSON string.
     *
     * @param integer $options toJson options
     *
     * @return string
     */
    public function toJson($options = 0)
    {
        return $this->getCollection()->toJson($options);
    }

    /**
     * Return the model as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->getCollection()->toArray();
    }

    /**
     * Get the model as a collection.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCollection(): \Illuminate\Support\Collection
    {
        $props = get_object_vars($this);
        $collection = collect();
        foreach ($props as $key => $value) {
            if (strpos($key, "__") === 0) {
                continue;
            }
            $collection->put($key, $value);
        }
        return $collection;
    }
}
