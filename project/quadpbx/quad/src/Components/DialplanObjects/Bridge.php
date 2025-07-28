<?php

namespace QuadPBX\Components\DialplanObjects;

class Bridge extends BaseDialplanObject
{
    public function output(): string
    {
        return "Bridge(" . $this->data . ")";
    }
}
