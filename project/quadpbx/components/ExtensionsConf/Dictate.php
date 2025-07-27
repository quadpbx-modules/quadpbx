<?php

namespace QuadPBX\Components\ExtensionsConf;

class Dictate extends ExtBase
{
    public function output(): string
    {
        return "Dictate(" . $this->data . ")";
    }
}
