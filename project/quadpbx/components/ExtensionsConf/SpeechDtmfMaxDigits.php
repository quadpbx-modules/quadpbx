<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechDtmfMaxDigits extends ExtBase
{
    public function output(): string
    {
        return "Set(SPEECH_DTMF_MAXLEN=" . $this->data . ")";
    }
}
