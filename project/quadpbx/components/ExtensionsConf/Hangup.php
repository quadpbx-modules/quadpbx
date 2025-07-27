<?php

namespace QuadPBX\Components\ExtensionsConf;

class Hangup extends ExtBase
{
    public function output(): string
    {
        return "Hangup(" . $this->data . ")";
    }
}
