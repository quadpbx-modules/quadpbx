<?php

namespace QuadPBX\Components\ExtensionsConf;

class Stasis extends Base
{
    public function output(): string
    {
        return "Stasis(" . $this->data . "," . $this->options . ")";
    }
}
