<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechUnloadGrammar extends Base
{
    public function output(): string
    {
        return "SpeechUnloadGrammar(" . $this->data . ")";
    }
}
