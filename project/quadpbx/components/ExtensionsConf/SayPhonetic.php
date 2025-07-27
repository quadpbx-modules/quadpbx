<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayPhonetic extends ExtBase
{
    public function output(): string
    {
        return "SayPhonetic(" . $this->data . ")";
    }
}
