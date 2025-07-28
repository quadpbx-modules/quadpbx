<?php

namespace QuadPBX\Components\DialplanObjects;

class TxtCidName extends BaseDialplanObject
{
    public function output(): string
    {
        return 'Set(TXTCIDNAME=${TXTCIDNAME(' . $this->data . ')})';
    }
}
