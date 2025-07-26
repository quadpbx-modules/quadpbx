<?php

namespace QuadPBX\Components\ExtensionsConf;

class TryExec extends Base
{
    public function output(): string
    {
        return "TryExec(" . $this->data . ")";
    }
}
