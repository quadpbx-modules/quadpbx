<?php

namespace QuadPBX\Components\DialplanObjects;

class DbGet extends BaseDialplanObject
{
    public function output(): string
    {
        return 'Set(' . $this->data . '=${DB(' . $this->options . ')})';
    }
}
