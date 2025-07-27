<?php

namespace QuadPBX\Components\ExtensionsConf;

class Log extends ExtBase
{
    public function output(): string
    {
        return "Log(" . $this->data . "," . $this->options . ")";
    }
}
