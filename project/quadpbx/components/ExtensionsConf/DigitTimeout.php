<?php

namespace QuadPBX\Components\ExtensionsConf;

class DigitTimeout extends ExtBase
{
    public function output(): string
    {
        return "Set(TIMEOUT(digit)=" . $this->data . ")";
    }
}
