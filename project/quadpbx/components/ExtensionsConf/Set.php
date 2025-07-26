<?php

namespace QuadPBX\Components\ExtensionsConf;

class Set extends Base
{
    public function output(): string
    {
        return "Set(" . $this->data . "=" . $this->options . ")";
    }
}
