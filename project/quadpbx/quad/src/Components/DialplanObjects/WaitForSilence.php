<?php

namespace QuadPBX\Components\DialplanObjects;

class WaitForSilence extends BaseDialplanObject
{
    public function output(): string
    {
        return "WaitForSilence(" . $this->data . ")";
    }
}
