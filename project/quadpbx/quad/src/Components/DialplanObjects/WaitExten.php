<?php

namespace QuadPBX\Components\DialplanObjects;

class WaitExten extends BaseDialplanObject
{
    public function output(): string
    {
        return "WaitExten(" . $this->data . "," . $this->options . ")";
    }
}
