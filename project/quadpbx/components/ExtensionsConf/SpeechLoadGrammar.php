<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechLoadGrammar extends ExtBase
{
    public function output(): string
    {
        return "SpeechLoadGrammar(" . $this->data . "," . $this->options . ")";
    }
}
