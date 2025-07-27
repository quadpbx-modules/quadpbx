<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechActivateGrammar extends ExtBase
{
    public function output(): string
    {
        return "SpeechActivateGrammar(" . $this->data . ")";
    }
}
