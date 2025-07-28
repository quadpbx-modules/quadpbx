<?php

namespace QuadPBX\Components\DialplanObjects;

class LookupBlacklist extends BaseDialplanObject
{
    public function output(): string
    {
        return "LookupBlacklist(" . $this->data . ")";
    }
}
