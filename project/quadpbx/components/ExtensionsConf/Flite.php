<?php

namespace QuadPBX\Components\ExtensionsConf;

class Flite extends ExtBase
{
    public function output(): string
    {
        return "Flite('" . $this->data . "')";
    }
}
