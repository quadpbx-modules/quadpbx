<?php

namespace QuadPBX\Components\ExtensionsConf;

class Transfer extends Base
{
    public function output(): string
    {
        return "Transfer(" . $this->data . ")";
    }
}
