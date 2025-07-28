<?php

namespace QuadPBX\Components\DialplanObjects;

class Busy extends BaseDialplanObject
{
    public function output(): string
    {
        return "Busy(" . $this->data . ")";
    }
}
