<?php

namespace QuadPBX\Components\ExtensionsConf;

class Playtones extends ExtBase
{
    public function output(): string
    {
        return "Playtones(" . $this->data . ")";
    }
}
