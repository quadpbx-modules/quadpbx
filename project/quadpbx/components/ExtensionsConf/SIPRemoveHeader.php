<?php

namespace QuadPBX\Components\ExtensionsConf;

class SIPRemoveHeader extends Base
{
    public function output(): string
    {
        return "SIPRemoveHeader(" . $this->data . ")";
    }
}
