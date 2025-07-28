<?php

namespace QuadPBX\Components\DialplanObjects;

class DbDel extends BaseDialplanObject
{
    public function output(): string
    {
        return 'Noop(Deleting: ' . $this->data . ' ${DB_DELETE(' . $this->data . ')})';
    }
}
