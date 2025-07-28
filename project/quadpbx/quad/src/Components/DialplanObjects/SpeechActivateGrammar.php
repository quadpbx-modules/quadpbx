<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechActivateGrammar extends BaseDialplanObject
{
    public function output(): string
    {
        return "SpeechActivateGrammar(" . $this->data . ")";
    }
}
