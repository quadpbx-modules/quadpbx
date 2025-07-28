<?php

namespace QuadPBX\Components\DialplanObjects;

class Congestion extends BaseDialplanObject
{
    public function output(): string
    {
        return "Congestion(" . $this->data . ")";
    }
}
