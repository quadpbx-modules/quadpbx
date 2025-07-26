<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetCallerPres extends Base
{
    public function output(): string
    {
        // Does this even work?
        return "Set(CALLERPRES()=" . $this->data . ")";
    }
}
