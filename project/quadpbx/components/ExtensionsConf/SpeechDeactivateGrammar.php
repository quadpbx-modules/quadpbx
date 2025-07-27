<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechDeactivateGrammar extends ExtBase
{
    public function output(): string
    {
        return "SpeechDeactivateGrammar(" . $this->data . ")";
    }
}
