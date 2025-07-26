<?php

namespace QuadPBX\Components\ExtensionsConf;

class ClearHash extends Base
{
    public function output(): string
    {
        return "ClearHash(" . $this->data . ")";
    }
}
