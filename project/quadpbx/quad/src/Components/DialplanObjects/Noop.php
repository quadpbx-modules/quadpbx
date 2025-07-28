<?php

namespace QuadPBX\Components\DialplanObjects;

class Noop extends BaseDialplanObject
{
    public function output(): string
    {
        return "Noop(" . $this->data . ")";
    }
}
