<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetCallerNumPres extends Base
{
    public function output(): string
    {
        return "Set(CALLERID(num-pres)=" . $this->data . ")";
    }
}
