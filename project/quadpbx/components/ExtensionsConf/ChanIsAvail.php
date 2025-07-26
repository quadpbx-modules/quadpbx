<?php

namespace QuadPBX\Components\ExtensionsConf;

class ChanIsAvail extends Base
{
    public function output(): string
    {
        return 'ChanIsAvail(' . $this->data . ',' . $this->options . ')';
    }
}
