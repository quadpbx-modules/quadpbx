<?php

namespace QuadPBX\Components\ExtensionsConf;

class LookupBlacklist extends ExtBase
{
    public function output(): string
    {
        return "LookupBlacklist(" . $this->data . ")";
    }
}
