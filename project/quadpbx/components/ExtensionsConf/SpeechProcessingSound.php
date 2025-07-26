<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechProcessingSound extends Base
{
    public function output(): string
    {
        return "SpeechProcessingSound(" . $this->data . ")";
    }
}
