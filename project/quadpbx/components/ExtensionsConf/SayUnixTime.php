<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayUnixTime extends ExtBase
{
    public function output(): string
    {
        return "SayUnixTime(" . $this->data . ")";
    }
}
