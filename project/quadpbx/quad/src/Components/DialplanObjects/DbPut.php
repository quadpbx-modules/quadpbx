<?php

namespace QuadPBX\Components\DialplanObjects;

class DbPut extends BaseDialplanObject
{
    public function output(): string
    {
        return 'Set(DB(' . $this->data . ')=' . $this->options . ')';
    }
}
