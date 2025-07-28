<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechDtmfTerminator extends BaseDialplanObject
{
    public function output(): string
    {
            return "Set(SPEECH_DTMF_TERMINATOR=" . $this->data . ")";
    }
}
