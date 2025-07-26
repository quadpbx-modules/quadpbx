<?php

namespace QuadPBX\Components\ExtensionsConf;

class DbDel extends Base
{
    public function output(): string
    {
        return 'Noop(Deleting: ' . $this->data . ' ${DB_DELETE(' . $this->data . ')})';
    }
}
