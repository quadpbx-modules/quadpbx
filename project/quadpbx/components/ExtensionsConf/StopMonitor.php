<?php

namespace QuadPBX\Components\ExtensionsConf;

class StopMonitor extends ExtBase
{
    public function output(): string
    {
        return "StopMonitor(" . $this->data . ")";
    }
}
