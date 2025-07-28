<?php

namespace QuadPBX\Components\DialplanObjects;

class Dictate extends BaseDialplanObject
{
    public function output(): string
    {
        return "Dictate(" . $this->data . ")";
    }
}
