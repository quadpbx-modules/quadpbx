<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechDeactivateGrammar extends Base
{
    public function output(): string
    {
        return "SpeechDeactivateGrammar(" . $this->data . ")";
    }
}
