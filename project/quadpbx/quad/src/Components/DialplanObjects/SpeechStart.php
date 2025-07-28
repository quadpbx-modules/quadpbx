<?php

namespace QuadPBX\Components\DialplanObjects;

class SpeechStart extends BaseDialplanObject
{
    public function output(): string
    {
        return "SpeechStart()";
    }
}
