<?php

namespace QuadPBX\Components\ExtensionsConf;

class Festival extends Base
{
    public function output(): string
    {
        return "Festival(" . $this->data . ")";
    }
}
