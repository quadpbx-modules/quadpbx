<?php

namespace QuadPBX\Components\ExtensionsConf;

class DeadAgi extends Base
{
    public function output(): string
    {
        return "DeadAGI(" . $this->data . ")";
    }
}
