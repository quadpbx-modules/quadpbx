<?php

namespace QuadPBX\Components\DialplanObjects;

class Wait extends BaseDialplanObject
{
    public function output(): string
    {
        return "Wait(" . $this->data . ")";
    }
}
