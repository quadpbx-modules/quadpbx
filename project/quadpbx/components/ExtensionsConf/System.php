<?php

namespace QuadPBX\Components\ExtensionsConf;

class System extends ExtBase
{
    public function output(): string
    {
        return "System(" . $this->data . ")";
    }
}
