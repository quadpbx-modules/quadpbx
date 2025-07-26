<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechActivateGrammar extends Base
{
    public function output(): string
    {
        return "SpeechActivateGrammar(" . $this->data . ")";
    }
}
