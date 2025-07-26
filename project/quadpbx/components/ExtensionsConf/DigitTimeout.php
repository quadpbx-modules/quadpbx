<?php

namespace QuadPBX\Components\ExtensionsConf;

class DigitTimeout extends Base
{
    public function output(): string
    {
        return "Set(TIMEOUT(digit)=" . $this->data . ")";
    }
}
