<?php

namespace QuadPBX\Components\ExtensionsConf;

class DbDelTree extends Base
{
    public function output(): string
    {
        return "dbDeltree(" . $this->data . ")";
    }
}
