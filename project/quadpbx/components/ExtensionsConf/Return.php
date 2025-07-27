<?php

namespace QuadPBX\Components\ExtensionsConf;

class ExtReturn extends ExtBase
{
    public function output(): string
    {
        return "Return(" . $this->data . ")";
    }
}
