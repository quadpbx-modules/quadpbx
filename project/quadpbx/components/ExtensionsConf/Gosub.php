<?php

namespace QuadPBX\Components\ExtensionsConf;

use QuadPBX\Core\Error;

class Gosub extends ExtBase
{
    protected string $pri;
    protected string $ext;
    protected string $context;
    protected string $args;

    public function __construct(string $pri, string $ext = '', string $context = '', string $args = '')
    {
        if ($context !== '' && $ext === '') {
            Error::trigger('$ext is required when passing $context in Gosub()');
        }

        $this->pri = $pri;
        $this->ext = $ext;
        $this->context = $context;
        $this->args = $args;
    }

    public function incrementContents($value)
    {
        $this->pri += $value;
    }

    public function output(): string
    {
        return 'Gosub(' . ($this->context ? $this->context . ',' : '') . ($this->ext ? $this->ext . ',' : '') . $this->pri . '(' . $this->args . '))' ;
    }
}
