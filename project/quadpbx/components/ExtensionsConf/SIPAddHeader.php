<?php

namespace QuadPBX\Components\ExtensionsConf;

class SIPAddHeader extends Base
{
    public function output(): string
    {
        return "SIPAddHeader(" . $this->data . ":" . $this->options . ")";
    }
}
