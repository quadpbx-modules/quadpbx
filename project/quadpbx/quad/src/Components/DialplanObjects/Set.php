<?php

namespace QuadPBX\Components\DialplanObjects;

class Set extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(" . $this->data . "=" . $this->options . ")";
    }
}
