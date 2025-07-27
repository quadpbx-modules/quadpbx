<?php

namespace QuadPBX\Components\ExtensionsConf;

class ParkedCall extends ExtBase
{
    public function output(): string
    {
        return "ParkedCall(" . $this->data . ")";
    }
}
