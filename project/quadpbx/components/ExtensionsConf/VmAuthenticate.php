<?php

namespace QuadPBX\Components\ExtensionsConf;

class VmAuthenticate extends ExtBase
{
    public function output(): string
    {
        return "VMAuthenticate(" . $this->data . ',' . $this->options . ")";
    }
}
