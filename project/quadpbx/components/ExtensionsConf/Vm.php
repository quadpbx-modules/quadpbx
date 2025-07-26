<?php

namespace QuadPBX\Components\ExtensionsConf;

class Vm extends Base
{
    public function output(): string
    {
        return "VoiceMail(" . $this->data . ")";
    }
}
