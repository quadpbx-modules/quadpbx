<?php

namespace QuadPBX\Components\DialplanObjects;

class Log extends BaseDialplanObject
{
    public function output(): string
    {
        return "Log(" . $this->data . "," . $this->options . ")";
    }
}
