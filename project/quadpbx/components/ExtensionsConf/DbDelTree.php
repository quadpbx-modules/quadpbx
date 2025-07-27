<?php

namespace QuadPBX\Components\ExtensionsConf;

class DbDelTree extends ExtBase
{
    public function output(): string
    {
        return "dbDeltree(" . $this->data . ")";
    }
}
