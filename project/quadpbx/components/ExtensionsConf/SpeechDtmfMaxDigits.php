<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechDtmfMaxDigits extends Base
{
    public function output(): string
    {
        return "Set(SPEECH_DTMF_MAXLEN=" . $this->data . ")";
    }
}
