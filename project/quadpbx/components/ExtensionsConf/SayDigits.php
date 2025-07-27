<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayDigits extends ExtBase
{
    public function output(): string
    {
        return "SayDigits(" . $this->data . ")";
    }
}
