<?php

namespace QuadPBX\Components\ExtensionsConf;

class Log extends Base
{
    public function output(): string
    {
        return "Log(" . $this->data . "," . $this->options . ")";
    }
}
