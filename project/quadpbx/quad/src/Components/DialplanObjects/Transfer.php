<?php

namespace QuadPBX\Components\DialplanObjects;

class Transfer extends BaseDialplanObject
{
    public function output(): string
    {
        return "Transfer(" . $this->data . ")";
    }
}
