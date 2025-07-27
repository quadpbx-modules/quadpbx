<?php

namespace QuadPBX\Components\ExtensionsConf;

class Congestion extends ExtBase
{
    public function output(): string
    {
        return "Congestion(" . $this->data . ")";
    }
}
