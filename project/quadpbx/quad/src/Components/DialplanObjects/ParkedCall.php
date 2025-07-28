<?php

namespace QuadPBX\Components\DialplanObjects;

class ParkedCall extends BaseDialplanObject
{
    public function output(): string
    {
        return "ParkedCall(" . $this->data . ")";
    }
}
