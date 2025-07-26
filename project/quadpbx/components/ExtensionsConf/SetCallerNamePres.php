<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetCallerNamePres extends Base
{
    public function output(): string
    {
        return "Set(CALLERID(name-pres)=" . $this->data . ")";
    }
}
