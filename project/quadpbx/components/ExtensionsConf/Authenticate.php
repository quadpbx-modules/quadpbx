<?php

namespace QuadPBX\Components\ExtensionsConf;

class Authenticate extends ExtBase
{
    public function output(): string
    {
        return "Authenticate(" . $this->data . "," . $this->options . ")";
    }
}
