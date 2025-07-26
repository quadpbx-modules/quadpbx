<?php

namespace QuadPBX\Components\ExtensionsConf;

class WaitForSilence extends Base
{
    public function output(): string
    {
        return "WaitForSilence(" . $this->data . ")";
    }
}
