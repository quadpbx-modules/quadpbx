<?php

namespace QuadPBX\Components\ExtensionsConf;

class TryExec extends ExtBase
{
    public function output(): string
    {
        return "TryExec(" . $this->data . ")";
    }
}
