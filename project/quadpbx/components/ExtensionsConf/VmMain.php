<?php

namespace QuadPBX\Components\ExtensionsConf;

class VmMain extends ExtBase
{
    public function output(): string
    {
        return "VoiceMailMain(" . $this->data . ")";
    }
}
