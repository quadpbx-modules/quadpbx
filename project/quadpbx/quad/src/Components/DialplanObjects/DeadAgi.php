<?php

namespace QuadPBX\Components\DialplanObjects;

class DeadAgi extends BaseDialplanObject
{
    public function output(): string
    {
        return "DeadAGI(" . $this->data . ")";
    }
}
