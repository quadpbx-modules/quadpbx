<?php

namespace QuadPBX\Components\ExtensionsConf;

class ChanIsAvail extends ExtBase
{
    public function output(): string
    {
        return 'ChanIsAvail(' . $this->data . ',' . $this->options . ')';
    }
}
