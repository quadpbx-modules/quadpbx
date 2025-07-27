<?php

namespace QuadPBX\Components\ExtensionsConf;

class Page extends ExtBase
{
    public function output(): string
    {
        return "Page(" . $this->data . ")";
    }
}
