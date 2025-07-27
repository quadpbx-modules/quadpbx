<?php

namespace QuadPBX\Components\ExtensionsConf;

class ExtEcho extends ExtBase
{
    public function output(): string
    {
        return "Echo(" . $this->data . ")";
    }
}
