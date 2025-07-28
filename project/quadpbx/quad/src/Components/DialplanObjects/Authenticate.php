<?php

namespace QuadPBX\Components\DialplanObjects;

class Authenticate extends BaseDialplanObject
{
    public function output(): string
    {
        return "Authenticate(" . $this->data . "," . $this->options . ")";
    }
}
