<?php

namespace QuadPBX\Components\DialplanObjects;

class SetCidName extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(CALLERID(name)=" . $this->data . ")";
    }
}
