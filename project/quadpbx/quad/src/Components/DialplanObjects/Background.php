<?php

namespace QuadPBX\Components\DialplanObjects;

class Background extends BaseDialplanObject
{
    public function output(): string
    {
        return "Background(" . $this->data . ")";
    }
}
