<?php

namespace QuadPBX\Components\DialplanObjects;

class ChanSpy extends BaseDialplanObject
{
    public function output(): string
    {
        return "ChanSpy(" . $this->data . ($this->options ? ',' . $this->options : '') . ")";
    }
}
