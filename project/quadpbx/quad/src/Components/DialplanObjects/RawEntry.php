<?php

namespace QuadPBX\Components\DialplanObjects;

class RawEntry extends BaseDialplanObject
{
    public function output(): string
    {
        return $this->data;
    }
}
