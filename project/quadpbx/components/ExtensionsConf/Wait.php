<?php

namespace QuadPBX\Components\ExtensionsConf;

class Wait extends ExtBase
{
    public function output(): string
    {
        return "Wait(" . $this->data . ")";
    }
}
