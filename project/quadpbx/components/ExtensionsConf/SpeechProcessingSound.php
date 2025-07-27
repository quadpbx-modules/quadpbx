<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechProcessingSound extends ExtBase
{
    public function output(): string
    {
        return "SpeechProcessingSound(" . $this->data . ")";
    }
}
