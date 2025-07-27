<?php

namespace QuadPBX\Components\ExtensionsConf;

class Set extends ExtBase
{
    public function output(): string
    {
        return "Set(" . $this->data . "=" . $this->options . ")";
    }
}
