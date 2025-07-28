<?php

namespace QuadPBX\Components\DialplanObjects;

class SetCallerNamePres extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(CALLERID(name-pres)=" . $this->data . ")";
    }
}
