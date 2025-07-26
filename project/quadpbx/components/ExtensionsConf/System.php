<?php

namespace QuadPBX\Components\ExtensionsConf;

class System extends Base
{
    public function output(): string
    {
        return "System(" . $this->data . ")";
    }
}
