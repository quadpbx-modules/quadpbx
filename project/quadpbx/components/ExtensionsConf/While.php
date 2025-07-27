<?php

namespace QuadPBX\Components\ExtensionsConf;

class ExtWhile extends ExtBase
{
    public function output(): string
    {
        return "While(" . $this->data . ")";
    }
}
