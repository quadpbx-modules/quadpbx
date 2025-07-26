<?php

namespace QuadPBX\Components\ExtensionsConf;

class Park extends Base
{
    public function output(): string
    {
        return "Park(" . $this->data . ")";
    }
}
