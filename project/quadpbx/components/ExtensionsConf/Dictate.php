<?php

namespace QuadPBX\Components\ExtensionsConf;

class Dictate extends Base
{
    public function output(): string
    {
        return "Dictate(" . $this->data . ")";
    }
}
