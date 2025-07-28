<?php

namespace QuadPBX\Components\DialplanObjects;

class Page extends BaseDialplanObject
{
    public function output(): string
    {
        return "Page(" . $this->data . ")";
    }
}
