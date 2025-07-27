<?php

namespace QuadPBX\Components\ExtensionsConf;

class DbPut extends ExtBase
{
    public function output(): string
    {
        return 'Set(DB(' . $this->data . ')=' . $this->options . ')';
    }
}
