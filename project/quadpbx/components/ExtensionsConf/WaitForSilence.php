<?php

namespace QuadPBX\Components\ExtensionsConf;

class WaitForSilence extends ExtBase
{
    public function output(): string
    {
        return "WaitForSilence(" . $this->data . ")";
    }
}
