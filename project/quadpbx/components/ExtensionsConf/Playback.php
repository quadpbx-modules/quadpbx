<?php

namespace QuadPBX\Components\ExtensionsConf;

class Playback extends ExtBase
{
    public function output(): string
    {
        return "Playback(" . $this->data . ")";
    }
}
