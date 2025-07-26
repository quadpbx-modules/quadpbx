<?php

namespace QuadPBX\Components\ExtensionsConf;

class Authenticate extends Base
{
    public function output(): string
    {
        return "Authenticate(" . $this->data . "," . $this->options . ")";
    }
}
