<?php

namespace QuadPBX\Components\ExtensionsConf;

class Disa extends Base
{
    public function output(): string
    {
        return "DISA(" . $this->data . ")";
    }
}
