<?php

namespace QuadPBX\Components\ExtensionsConf;

class Pickup extends ExtBase
{
    public function output(): string
    {
        return "Pickup(" . $this->data . ")";
    }
}
