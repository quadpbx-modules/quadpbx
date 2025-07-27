<?php

namespace QuadPBX\Components\ExtensionsConf;

class ResetCDR extends ExtBase
{
    public function output(): string
    {
        return "ResetCDR(" . $this->data . ")";
    }
}
