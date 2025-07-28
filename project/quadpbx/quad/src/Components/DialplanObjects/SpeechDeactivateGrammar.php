<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechDeactivateGrammar extends BaseDialplanObject
{
    public function output(): string
    {
        return "SpeechDeactivateGrammar(" . $this->data . ")";
    }
}
