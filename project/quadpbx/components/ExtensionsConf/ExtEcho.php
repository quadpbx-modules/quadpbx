<?php

namespace QuadPBX\Components\ExtensionsConf;

class ExtEcho extends Base
{
    public function output(): string
    {
        return "Echo(" . $this->data . ")";
    }
}
