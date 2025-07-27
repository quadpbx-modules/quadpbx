<?php

namespace QuadPBX\Components\ExtensionsConf;

class SIPRemoveHeader extends ExtBase
{
    public function output(): string
    {
        return "SIPRemoveHeader(" . $this->data . ")";
    }
}
