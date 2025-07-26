<?php

namespace QuadPBX\Components\ExtensionsConf;

class Record extends Base
{
    public function output(): string
    {
        return "Record(" . $this->data . ")";
    }
}
