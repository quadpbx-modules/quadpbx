<?php

namespace QuadPBX\Components\ExtensionsConf;

class Hangup extends Base
{
    public function output(): string
    {
        return "Hangup(" . $this->data . ")";
    }
}
