<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetGlobalVar extends ExtBase
{
    public function output(): string
    {
        return "Set(" . $this->data . "=" . $this->options . ",g)";
    }
}
