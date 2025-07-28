<?php

namespace QuadPBX\Components\DialplanObjects;

class SayUnixTime extends BaseDialplanObject
{
    public function output(): string
    {
        return "SayUnixTime(" . $this->data . ")";
    }
}
