<?php

namespace QuadPBX\Components\DialplanObjects;

class Park extends BaseDialplanObject
{
    public function output(): string
    {
        return "Park(" . $this->data . ")";
    }
}
