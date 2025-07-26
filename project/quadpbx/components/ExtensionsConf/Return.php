<?php

namespace QuadPBX\Components\ExtensionsConf;

class ExtReturn extends Base
{
    public function output(): string
    {
        return "Return(" . $this->data . ")";
    }
}
