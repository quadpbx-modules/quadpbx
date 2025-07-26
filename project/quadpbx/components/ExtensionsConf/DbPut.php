<?php

namespace QuadPBX\Components\ExtensionsConf;

class DbPut extends Base
{
    public function output(): string
    {
        return 'Set(DB(' . $this->data . ')=' . $this->options . ')';
    }
}
