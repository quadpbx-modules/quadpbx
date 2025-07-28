<?php

namespace QuadPBX\Components\DialplanObjects;

class Playback extends BaseDialplanObject
{
    public function output(): string
    {
        return "Playback(" . $this->data . ")";
    }
}
