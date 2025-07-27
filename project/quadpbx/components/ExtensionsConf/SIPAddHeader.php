<?php

namespace QuadPBX\Components\ExtensionsConf;

class SIPAddHeader extends ExtBase
{
    public function output(): string
    {
        return "SIPAddHeader(" . $this->data . ":" . $this->options . ")";
    }
}
