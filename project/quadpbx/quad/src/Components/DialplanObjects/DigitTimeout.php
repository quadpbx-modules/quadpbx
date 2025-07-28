<?php

namespace QuadPBX\Components\DialplanObjects;

class DigitTimeout extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(TIMEOUT(digit)=" . $this->data . ")";
    }
}
