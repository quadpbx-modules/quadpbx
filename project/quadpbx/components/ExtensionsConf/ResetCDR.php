<?php

namespace QuadPBX\Components\ExtensionsConf;

class ResetCDR extends Base
{
    public function output(): string
    {
        return "ResetCDR(" . $this->data . ")";
    }
}
