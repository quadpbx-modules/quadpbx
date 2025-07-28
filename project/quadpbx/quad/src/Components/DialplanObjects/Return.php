<?php

namespace QuadPBX\Components\DialplanObjects;

class ExtReturn extends BaseDialplanObject
{
    public function output(): string
    {
        return "Return(" . $this->data . ")";
    }
}
