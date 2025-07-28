<?php

namespace QuadPBX\Components\DialplanObjects;

class Stasis extends BaseDialplanObject
{
    public function output(): string
    {
        return "Stasis(" . $this->data . "," . $this->options . ")";
    }
}
