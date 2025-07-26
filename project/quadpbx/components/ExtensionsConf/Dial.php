<?php

namespace QuadPBX\Components\ExtensionsConf;

class Dial extends Base
{
    public function output(): string
    {
        return "Dial(" . $this->data . "," . $this->options . ")";
    }
}
