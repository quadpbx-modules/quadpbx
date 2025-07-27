<?php

namespace QuadPBX\Components\ExtensionsConf;

class Background extends ExtBase
{
    public function output(): string
    {
        return "Background(" . $this->data . ")";
    }
}
