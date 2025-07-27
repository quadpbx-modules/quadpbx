<?php

namespace QuadPBX\Components\ExtensionsConf;

class Stasis extends ExtBase
{
    public function output(): string
    {
        return "Stasis(" . $this->data . "," . $this->options . ")";
    }
}
