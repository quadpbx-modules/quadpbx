<?php

namespace QuadPBX\Components\ExtensionsConf;

class Bridge extends ExtBase
{
    public function output(): string
    {
        return "Bridge(" . $this->data . ")";
    }
}
