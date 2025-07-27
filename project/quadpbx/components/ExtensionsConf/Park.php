<?php

namespace QuadPBX\Components\ExtensionsConf;

class Park extends ExtBase
{
    public function output(): string
    {
        return "Park(" . $this->data . ")";
    }
}
