<?php

namespace QuadPBX\Components\ExtensionsConf;

class Zapateller extends ExtBase
{
    public function output(): string
    {
        return "Zapateller(" . $this->data . ")";
    }
}
