<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetCallerNumPres extends ExtBase
{
    public function output(): string
    {
        return "Set(CALLERID(num-pres)=" . $this->data . ")";
    }
}
