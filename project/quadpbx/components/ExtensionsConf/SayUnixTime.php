<?php

namespace QuadPBX\Components\ExtensionsConf;

class SayUnixTime extends Base
{
    public function output(): string
    {
        return "SayUnixTime(" . $this->data . ")";
    }
}
