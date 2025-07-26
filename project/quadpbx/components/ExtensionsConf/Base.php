<?php

namespace QuadPBX\Components\ExtensionsConf;

use QuadPBX\Interfaces\DialplanObject;

class Base implements DialplanObject
{
    /** @var mixed data */
    protected $data;
    /** @var mixed options */
    protected $options;

    public function __construct($data = '', $options = '')
    {
        $this->data = $data;
        $this->options = $options;
    }

    public function incrementContents($value)
    {
        return true;
    }

    public function output(): string
    {
        return $this->data;
    }
}
