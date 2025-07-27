<?php

namespace QuadPBX\Components\ExtensionsConf;

class DbDel extends ExtBase
{
    public function output(): string
    {
        return 'Noop(Deleting: ' . $this->data . ' ${DB_DELETE(' . $this->data . ')})';
    }
}
