<?php

namespace QuadPBX\Components\ExtensionsConf;

class GotoIfTime extends ExtBase
{
    public function output(): string
    {
        return 'GotoIfTime(' . $this->data . '?' . $this->options . ')' ;
    }

    public function incrementContents($value)
    {
        $this->options += $value;
    }
}
