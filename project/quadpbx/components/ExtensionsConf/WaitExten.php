<?php

namespace QuadPBX\Components\ExtensionsConf;

class WaitExten extends ExtBase
{
    public function output(): string
    {
        return "WaitExten(" . $this->data . "," . $this->options . ")";
    }
}
