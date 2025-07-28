<?php

namespace QuadPBX\Components\DialplanObjects;

use QuadPBX\Core\Error;

class ExtGoto extends BaseDialplanObject
{
    protected string $context;

    public function __construct($pri, $ext = '', $context = '')
    {
        $this->data = $pri;
        $this->options = $ext;
        $this->context = $context;
    }

    public function output(): string
    {
        $str = 'Goto('.trim(join(",", [ $this->data, $this->options, $this->context]), ",").")";
        return $str;
    }
}
