<?php

namespace QuadPBX\Components\DialplanObjects;

class Hangup extends BaseDialplanObject
{
    public function output(): string
    {
        return "Hangup(" . $this->data . ")";
    }
}
