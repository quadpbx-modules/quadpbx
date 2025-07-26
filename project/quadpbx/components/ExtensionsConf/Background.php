<?php

namespace QuadPBX\Components\ExtensionsConf;

class Background extends Base
{
    public function output(): string
    {
        return "Background(" . $this->data . ")";
    }
}
