<?php

namespace QuadPBX\Components\ExtensionsConf;

class DeadAgi extends ExtBase
{
    public function output(): string
    {
        return "DeadAGI(" . $this->data . ")";
    }
}
