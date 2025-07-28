<?php

namespace QuadPBX\Components\DialplanObjects;

class Festival extends BaseDialplanObject
{
    public function output(): string
    {
        return "Festival(" . $this->data . ")";
    }
}
