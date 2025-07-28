<?php

namespace QuadPBX\Components\DialplanObjects;

class StopMonitor extends BaseDialplanObject
{
    public function output(): string
    {
        return "StopMonitor(" . $this->data . ")";
    }
}
