<?php

namespace QuadPBX\Components\ExtensionsConf;

class StopMixMonitor extends ExtBase
{
    public function output(): string
    {
        return "StopMixMonitor(" . $this->data . ")";
    }
}
