<?php

namespace QuadPBX\Components\ExtensionsConf;

class WaitExten extends Base
{
    public function output(): string
    {
        return "WaitExten(" . $this->data . "," . $this->options . ")";
    }
}
