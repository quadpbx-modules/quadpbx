<?php

namespace QuadPBX\Components\ExtensionsConf;

class Page extends Base
{
    public function output(): string
    {
        return "Page(" . $this->data . ")";
    }
}
