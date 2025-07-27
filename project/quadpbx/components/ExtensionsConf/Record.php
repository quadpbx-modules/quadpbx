<?php

namespace QuadPBX\Components\ExtensionsConf;

class Record extends ExtBase
{
    public function output(): string
    {
        return "Record(" . $this->data . ")";
    }
}
