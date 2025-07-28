<?php

namespace QuadPBX\Components\DialplanObjects;

class Flite extends BaseDialplanObject
{
    public function output(): string
    {
        return "Flite('" . $this->data . "')";
    }
}
