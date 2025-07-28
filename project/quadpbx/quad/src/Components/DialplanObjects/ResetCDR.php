<?php

namespace QuadPBX\Components\DialplanObjects;

class ResetCDR extends BaseDialplanObject
{
    public function output(): string
    {
        return "ResetCDR(" . $this->data . ")";
    }
}
