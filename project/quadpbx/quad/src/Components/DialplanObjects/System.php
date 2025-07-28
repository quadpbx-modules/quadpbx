<?php

namespace QuadPBX\Components\DialplanObjects;

class System extends BaseDialplanObject
{
    public function output(): string
    {
        return "System(" . $this->data . ")";
    }
}
