<?php

namespace QuadPBX\Components\DialplanObjects;

class ClearHash extends BaseDialplanObject
{
    public function output(): string
    {
        return "ClearHash(" . $this->data . ")";
    }
}
