<?php

namespace QuadPBX\Components\ExtensionsConf;

class Flite extends Base
{
    public function output(): string
    {
        return "Flite('" . $this->data . "')";
    }
}
