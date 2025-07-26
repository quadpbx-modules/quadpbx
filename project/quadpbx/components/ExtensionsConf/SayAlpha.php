<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayAlpha extends Base
{
    public function output(): string
    {
        return "SayAlpha(" . $this->data . ")";
    }
}
