<?php

namespace QuadPBX\Components\ExtensionsConf;

class ParkedCall extends Base
{
    public function output(): string
    {
        return "ParkedCall(" . $this->data . ")";
    }
}
