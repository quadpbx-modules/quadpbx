<?php

namespace QuadPBX\Components\ExtensionsConf;

class Festival extends ExtBase
{
    public function output(): string
    {
        return "Festival(" . $this->data . ")";
    }
}
