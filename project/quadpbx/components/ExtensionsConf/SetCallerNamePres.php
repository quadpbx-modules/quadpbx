<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetCallerNamePres extends ExtBase
{
    public function output(): string
    {
        return "Set(CALLERID(name-pres)=" . $this->data . ")";
    }
}
