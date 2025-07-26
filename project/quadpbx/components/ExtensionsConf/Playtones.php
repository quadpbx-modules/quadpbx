<?php

namespace QuadPBX\Components\ExtensionsConf;

class Playtones extends Base
{
    public function output(): string
    {
        return "Playtones(" . $this->data . ")";
    }
}
