<?php

namespace QuadPBX\Components\ExtensionsConf;

class Dial extends ExtBase
{
    public function output(): string
    {
        return "Dial(" . $this->data . "," . $this->options . ")";
    }
}
