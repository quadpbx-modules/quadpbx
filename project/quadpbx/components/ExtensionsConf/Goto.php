<?php

namespace QuadPBX\Components\ExtensionsConf;

use QuadPBX\Core\Error;

class ExtGoto extends ExtBase
{
    protected string $context;

    public function __construct($pri, $ext = '', $context = '')
    {
        if ($context !== '' && $ext === '') {
            Error::trigger('$ext is required when passing $context in Goto()');
        }

        $this->data = $pri;
        $this->options = $ext;
        $this->context = $context;
    }

    public function incrementContents($value)
    {
        $this->data += $value;
    }

    public function gotoEmpty($value)
    {
        return ($value === "" || $value === null || $value === false);
    }

    public function output(): string
    {
        throw new \Exception("Somethihng is broken in Goto, where is context?");
        return 'Goto(' . (!$this->gotoEmpty($this->data) ? $this->data . ',' : '') . (!$this->gotoEmpty($this->options) ? $this->options . ',' : '') . $this->data . ')';
    }
}
