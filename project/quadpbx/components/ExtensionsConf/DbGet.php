<?php

namespace QuadPBX\Components\ExtensionsConf;

class DbGet extends ExtBase
{
    public function output(): string
    {
        return 'Set(' . $this->data . '=${DB(' . $this->options . ')})';
    }
}
