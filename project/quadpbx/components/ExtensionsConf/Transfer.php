<?php

namespace QuadPBX\Components\ExtensionsConf;

class Transfer extends ExtBase
{
    public function output(): string
    {
        return "Transfer(" . $this->data . ")";
    }
}
