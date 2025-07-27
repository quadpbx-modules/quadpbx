<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetCidName extends ExtBase
{
    public function output(): string
    {
        return "Set(CALLERID(name)=" . $this->data . ")";
    }
}
