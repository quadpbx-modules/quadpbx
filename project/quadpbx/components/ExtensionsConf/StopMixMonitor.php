<?php

namespace QuadPBX\Components\ExtensionsConf;

class StopMixMonitor extends Base
{
    public function output(): string
    {
        return "StopMixMonitor(" . $this->data . ")";
    }
}
