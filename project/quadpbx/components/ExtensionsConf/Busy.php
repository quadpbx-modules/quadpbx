<?php

namespace QuadPBX\Components\ExtensionsConf;

class Busy extends ExtBase
{
    public function output(): string
    {
        return "Busy(" . $this->data . ")";
    }
}
