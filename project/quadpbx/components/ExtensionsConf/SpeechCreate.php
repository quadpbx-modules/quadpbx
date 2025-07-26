<?php

namespace QuadPBX\Components\ExtensionsConf;

class SpeechCreate extends Base
{
    public function output(): string
    {
        return "SpeechCreate(" . $this->data . ")";
    }
}
