<?php

namespace QuadPBX\Components\ExtensionsConf;

class Noop extends ExtBase
{
    public function output(): string
    {
        return "Noop(" . $this->data . ")";
    }
}
