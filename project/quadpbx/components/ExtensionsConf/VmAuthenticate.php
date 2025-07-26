<?php

namespace QuadPBX\Components\ExtensionsConf;

class VmAuthenticate extends Base
{
    public function output(): string
    {
        return "VMAuthenticate(" . $this->data . ',' . $this->options . ")";
    }
}
