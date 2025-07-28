<?php

namespace QuadPBX\Components\DialplanObjects;

class StopMixMonitor extends BaseDialplanObject
{
    public function output(): string
    {
        return "StopMixMonitor(" . $this->data . ")";
    }
}
