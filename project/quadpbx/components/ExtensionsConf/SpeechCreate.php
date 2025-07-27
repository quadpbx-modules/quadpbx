<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechCreate extends ExtBase
{
    public function output(): string
    {
        return "SpeechCreate(" . $this->data . ")";
    }
}
