<?php

namespace QuadPBX\Components\ExtensionsConf;

class ClearHash extends ExtBase
{
    public function output(): string
    {
        return "ClearHash(" . $this->data . ")";
    }
}
