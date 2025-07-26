<?php

namespace QuadPBX\Components\ExtensionsConf;

class TxtCidName extends Base
{
    public function output(): string
    {
        return 'Set(TXTCIDNAME=${TXTCIDNAME(' . $this->data . ')})';
    }
}
