<?php

namespace QuadPBX\Components\DialplanObjects;

class SayDigits extends BaseDialplanObject
{
    public function output(): string
    {
        return "SayDigits(" . $this->data . ")";
    }
}
