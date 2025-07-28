<?php

namespace QuadPBX\Components\DialplanObjects;

class VmMain extends BaseDialplanObject
{
    public function output(): string
    {
        return "VoiceMailMain(" . $this->data . ")";
    }
}
