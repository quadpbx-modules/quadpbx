<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechDtmfTerminator extends Base
{
    public function output(): string
    {
            return "Set(SPEECH_DTMF_TERMINATOR=" . $this->data . ")";
    }
}
