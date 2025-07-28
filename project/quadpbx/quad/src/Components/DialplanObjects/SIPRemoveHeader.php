<?php

namespace QuadPBX\Components\DialplanObjects;

class SIPRemoveHeader extends BaseDialplanObject
{
    public function output(): string
    {
        return "SIPRemoveHeader(" . $this->data . ")";
    }
}
