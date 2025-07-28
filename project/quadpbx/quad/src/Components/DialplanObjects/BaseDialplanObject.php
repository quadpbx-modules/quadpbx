<?php

namespace QuadPBX\Components\DialplanObjects;

use QuadPBX\Interfaces\DialplanObject;

abstract class BaseDialplanObject implements DialplanObject
{
    /**
     * @var mixed data
     */
    protected $data;

    /**
     * @var mixed options
     */
    protected $options;

    protected string $name = '';
    protected string $comment = '';

    public function __construct($data = '', $options = '')
    {
        $this->data = $data;
        $this->options = $options;
    }

    /**
     * Used to set names for Goto's or finding this later.
     *
     * @param string $name Simple name to set
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /** @return string  */
    public function getName(): string
    {
        return $this->name;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function output(): string
    {
        throw new \Exception("How did you not make an output?");
    }
}
