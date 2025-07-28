<?php

namespace QuadPBX\Components\DialplanObjects;

class Disa extends BaseDialplanObject
{
    public function output(): string
    {
        return "DISA(" . $this->data . ")";
    }
}
