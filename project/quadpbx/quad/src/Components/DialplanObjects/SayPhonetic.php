<?php

namespace QuadPBX\Components\DialplanObjects;

class SayPhonetic extends BaseDialplanObject
{
    public function output(): string
    {
        return "SayPhonetic(" . $this->data . ")";
    }
}
