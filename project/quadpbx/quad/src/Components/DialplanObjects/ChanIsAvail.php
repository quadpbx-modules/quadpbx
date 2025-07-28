<?php

namespace QuadPBX\Components\DialplanObjects;

class ChanIsAvail extends BaseDialplanObject
{
    public function output(): string
    {
        return 'ChanIsAvail(' . $this->data . ',' . $this->options . ')';
    }
}
