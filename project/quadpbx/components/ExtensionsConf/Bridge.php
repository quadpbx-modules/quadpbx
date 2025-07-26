<?php

namespace QuadPBX\Components\ExtensionsConf;

class Bridge extends Base
{
    public function output(): string
    {
        return "Bridge(" . $this->data . ")";
    }
}
