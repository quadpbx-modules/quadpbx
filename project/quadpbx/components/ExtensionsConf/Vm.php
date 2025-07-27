<?php

namespace QuadPBX\Components\ExtensionsConf;

class Vm extends ExtBase
{
    public function output(): string
    {
        return "VoiceMail(" . $this->data . ")";
    }
}
