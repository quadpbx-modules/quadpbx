<?php

namespace QuadPBX\Components\DialplanObjects;

class SetCallerPres extends BaseDialplanObject
{
    public function output(): string
    {
        // Does this even work?
        return "Set(CALLERPRES()=" . $this->data . ")";
    }
}
