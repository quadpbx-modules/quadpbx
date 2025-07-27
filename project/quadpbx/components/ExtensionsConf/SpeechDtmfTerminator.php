<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechDtmfTerminator extends ExtBase
{
    public function output(): string
    {
            return "Set(SPEECH_DTMF_TERMINATOR=" . $this->data . ")";
    }
}
