<?php

namespace QuadPBX\Components\DialplanObjects;

class Dial extends BaseDialplanObject
{
    public function output(): string
    {
        return "Dial(" . $this->data . "," . $this->options . ")";
    }
}
