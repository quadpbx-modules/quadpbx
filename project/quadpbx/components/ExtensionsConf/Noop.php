<?php

namespace QuadPBX\Components\ExtensionsConf;

class Noop extends Base
{
    public function output(): string
    {
        return "Noop(" . $this->data . ")";
    }
}
