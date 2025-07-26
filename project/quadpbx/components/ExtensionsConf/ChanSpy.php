<?php

namespace QuadPBX\Components\ExtensionsConf;

class ChanSpy extends Base
{
    public function output(): string
    {
        return "ChanSpy(" . $this->data . ($this->options ? ',' . $this->options : '') . ")";
    }
}
