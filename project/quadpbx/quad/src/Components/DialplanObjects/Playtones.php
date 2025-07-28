<?php

namespace QuadPBX\Components\DialplanObjects;

class Playtones extends BaseDialplanObject
{
    public function output(): string
    {
        return "Playtones(" . $this->data . ")";
    }
}
