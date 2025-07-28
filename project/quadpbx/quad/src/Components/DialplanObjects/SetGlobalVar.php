<?php

namespace QuadPBX\Components\DialplanObjects;

class SetGlobalVar extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(" . $this->data . "=" . $this->options . ",g)";
    }
}
