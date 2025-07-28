<?php

namespace QuadPBX\Components\DialplanObjects;

class ExtWhile extends BaseDialplanObject
{
    public function output(): string
    {
        return "While(" . $this->data . ")";
    }
}
