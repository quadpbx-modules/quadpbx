<?php

namespace QuadPBX\Components\ExtensionsConf;

class Pickup extends Base
{
    public function output(): string
    {
        return "Pickup(" . $this->data . ")";
    }
}
