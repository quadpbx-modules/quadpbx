<?php

namespace QuadPBX\Components\ExtensionsConf;

class ExtWhile extends Base
{
    public function output(): string
    {
        return "While(" . $this->data . ")";
    }
}
