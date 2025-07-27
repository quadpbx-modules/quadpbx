<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayAlpha extends ExtBase
{
    public function output(): string
    {
        return "SayAlpha(" . $this->data . ")";
    }
}
