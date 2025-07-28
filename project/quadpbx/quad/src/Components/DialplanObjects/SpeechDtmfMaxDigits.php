<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechDtmfMaxDigits extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(SPEECH_DTMF_MAXLEN=" . $this->data . ")";
    }
}
