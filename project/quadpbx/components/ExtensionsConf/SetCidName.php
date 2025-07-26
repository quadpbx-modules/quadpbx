<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetCidName extends Base
{
    public function output(): string
    {
        return "Set(CALLERID(name)=" . $this->data . ")";
    }
}
