<?php

namespace QuadPBX\Components\ExtensionsConf;

class StopMonitor extends Base
{
    public function output(): string
    {
        return "StopMonitor(" . $this->data . ")";
    }
}
