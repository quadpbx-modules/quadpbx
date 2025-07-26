<?php

namespace QuadPBX\Components\ExtensionsConf;

class VmMain extends Base
{
    public function output(): string
    {
        return "VoiceMailMain(" . $this->data . ")";
    }
}
