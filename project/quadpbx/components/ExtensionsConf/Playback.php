<?php

namespace QuadPBX\Components\ExtensionsConf;

class Playback extends Base
{
    public function output(): string
    {
        return "Playback(" . $this->data . ")";
    }
}
