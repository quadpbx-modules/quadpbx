<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechUnloadGrammar extends BaseDialplanObject
{
    public function output(): string
    {
        return "SpeechUnloadGrammar(" . $this->data . ")";
    }
}
