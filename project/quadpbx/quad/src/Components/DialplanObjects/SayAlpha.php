<?php

namespace QuadPBX\Components\DialplanObjects;

class SayAlpha extends BaseDialplanObject
{
    public function output(): string
    {
        return "SayAlpha(" . $this->data . ")";
    }
}
