<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechLoadGrammar extends Base
{
    public function output(): string
    {
        return "SpeechLoadGrammar(" . $this->data . "," . $this->options . ")";
    }
}
