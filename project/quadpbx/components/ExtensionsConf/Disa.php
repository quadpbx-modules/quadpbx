<?php

namespace QuadPBX\Components\ExtensionsConf;

class Disa extends ExtBase
{
    public function output(): string
    {
        return "DISA(" . $this->data . ")";
    }
}
