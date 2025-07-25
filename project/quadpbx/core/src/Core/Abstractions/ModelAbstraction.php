<?php

namespace QuadPBX\Core\Abstractions;

use ArrayAccess;
use JsonSerializable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

/** @package QuadPBX\Core\Abstractions */
abstract class ModelAbstraction implements
    Arrayable,
    ArrayAccess,
    Jsonable,
    JsonSerializable
{
    protected array $__all = [];

    /**
     * If no data is provided, don't load anything, it's an empty object
     *
     * @param null|array $data
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
     * @param array $params
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
     * @param mixed $key
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->{$key})) {
            return $this->{$key};
        }
    }

    /**
     * @param mixed $key
     * @return boolean
     */
    public function __isset($key)
    {
        return isset($this->{$key});
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @return void
     */
    public function __set($key, $value)
    {
        $this->{$key} = $value;
        $this->__all[$key] = $value;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->{$offset} = $value;
    }

    /**
     * @param mixed $offset
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->{$offset});
    }

    /**
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->{$offset});
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->{$offset}) ? $this->{$offset} : null;
    }

    /** @return mixed  */
    public function jsonSerialize(): mixed
    {
        return $this->getCollection()->toArray();
    }

    /**
     * @param integer $options
     * @return string
     */
    public function toJson($options = 0) // phpcs:ignore Squiz.Commenting.FunctionComment.ScalarTypeHintMissing
    {
        return $this->getCollection()->toJson($options);
    }

    /** @return array  */
    public function toArray()
    {
        return $this->getCollection()->toArray();
    }

    /** @return \Illuminate\Support\Collection  */
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
