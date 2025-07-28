<?php

namespace QuadPBX\Components\DialplanObjects;

class VmAuthenticate extends BaseDialplanObject
{
    public function output(): string
    {
        return "VMAuthenticate(" . $this->data . ',' . $this->options . ")";
    }
}
