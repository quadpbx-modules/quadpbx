<?php

namespace QuadPBX\Components\DialplanObjects;

class SetCallerNumPres extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(CALLERID(num-pres)=" . $this->data . ")";
    }
}
