<?php

namespace QuadPBX\Components\ExtensionsConf;

class TxtCidName extends ExtBase
{
    public function output(): string
    {
        return 'Set(TXTCIDNAME=${TXTCIDNAME(' . $this->data . ')})';
    }
}
