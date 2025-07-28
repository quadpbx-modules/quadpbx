<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechCreate extends BaseDialplanObject
{
    public function output(): string
    {
        return "SpeechCreate(" . $this->data . ")";
    }
}
