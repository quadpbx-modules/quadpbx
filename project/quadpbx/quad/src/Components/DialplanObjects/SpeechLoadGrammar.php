<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechLoadGrammar extends BaseDialplanObject
{
    public function output(): string
    {
        return "SpeechLoadGrammar(" . $this->data . "," . $this->options . ")";
    }
}
