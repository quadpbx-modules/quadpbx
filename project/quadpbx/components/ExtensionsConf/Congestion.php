<?php

namespace QuadPBX\Components\ExtensionsConf;

class Congestion extends Base
{
    public function output(): string
    {
        return "Congestion(" . $this->data . ")";
    }
}
