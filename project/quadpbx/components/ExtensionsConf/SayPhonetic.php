<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayPhonetic extends Base
{
    public function output(): string
    {
        return "SayPhonetic(" . $this->data . ")";
    }
}
