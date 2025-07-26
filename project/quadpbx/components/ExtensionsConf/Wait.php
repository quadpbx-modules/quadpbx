<?php

namespace QuadPBX\Components\ExtensionsConf;

class Wait extends Base
{
    public function output(): string
    {
        return "Wait(" . $this->data . ")";
    }
}
