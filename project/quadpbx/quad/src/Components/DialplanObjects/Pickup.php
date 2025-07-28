<?php

namespace QuadPBX\Components\DialplanObjects;

class Pickup extends BaseDialplanObject
{
    public function output(): string
    {
        return "Pickup(" . $this->data . ")";
    }
}
