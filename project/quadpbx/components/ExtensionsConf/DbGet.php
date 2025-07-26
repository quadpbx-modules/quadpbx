<?php

namespace QuadPBX\Components\ExtensionsConf;

class DbGet extends Base
{
    public function output(): string
    {
        return 'Set(' . $this->data . '=${DB(' . $this->options . ')})';
    }
}
