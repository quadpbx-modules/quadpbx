<?php

namespace QuadPBX\Components\ExtensionsConf;

class DPickup extends ExtBase
{
    public function output(): string
    {
        return "DPickup(" . $this->data . ")";
    }
}
