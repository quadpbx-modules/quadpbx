<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetGlobalVar extends Base
{
    public function output(): string
    {
        return "Set(" . $this->data . "=" . $this->options . ",g)";
    }
}
