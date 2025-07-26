<?php

namespace QuadPBX\Components\ExtensionsConf;

class LookupBlacklist extends Base
{
    public function output(): string
    {
        return "LookupBlacklist(" . $this->data . ")";
    }
}
