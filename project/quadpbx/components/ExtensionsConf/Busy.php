<?php

namespace QuadPBX\Components\ExtensionsConf;

class Busy extends Base
{
    public function output(): string
    {
        return "Busy(" . $this->data . ")";
    }
}
