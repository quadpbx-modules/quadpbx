<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechUnloadGrammar extends ExtBase
{
    public function output(): string
    {
        return "SpeechUnloadGrammar(" . $this->data . ")";
    }
}
