<?php

namespace QuadPBX\Components\ExtensionsConf;

class Zapateller extends Base
{
    public function output(): string
    {
        return "Zapateller(" . $this->data . ")";
    }
}
