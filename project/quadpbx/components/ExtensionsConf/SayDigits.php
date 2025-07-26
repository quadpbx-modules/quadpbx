<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayDigits extends Base
{
    public function output(): string
    {
        return "SayDigits(" . $this->data . ")";
    }
}
