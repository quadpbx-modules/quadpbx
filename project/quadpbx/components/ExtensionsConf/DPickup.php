<?php

namespace QuadPBX\Components\ExtensionsConf;

class DPickup extends Base
{
    public function output(): string
    {
        return "DPickup(" . $this->data . ")";
    }
}
