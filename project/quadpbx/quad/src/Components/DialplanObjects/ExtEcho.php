<?php

namespace QuadPBX\Components\DialplanObjects;

class ExtEcho extends BaseDialplanObject
{
    public function output(): string
    {
        return "Echo(" . $this->data . ")";
    }
}
