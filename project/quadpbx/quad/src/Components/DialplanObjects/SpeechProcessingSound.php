<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechProcessingSound extends BaseDialplanObject
{
    public function output(): string
    {
        return "SpeechProcessingSound(" . $this->data . ")";
    }
}
