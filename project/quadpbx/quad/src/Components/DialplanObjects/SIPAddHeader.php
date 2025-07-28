<?php

namespace QuadPBX\Components\DialplanObjects;

class SIPAddHeader extends BaseDialplanObject
{
    public function output(): string
    {
        return "SIPAddHeader(" . $this->data . ":" . $this->options . ")";
    }
}
