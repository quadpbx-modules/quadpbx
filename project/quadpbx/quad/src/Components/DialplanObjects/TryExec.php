<?php

namespace QuadPBX\Components\DialplanObjects;

class TryExec extends BaseDialplanObject
{
    public function output(): string
    {
        return "TryExec(" . $this->data . ")";
    }
}
