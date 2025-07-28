<?php

namespace QuadPBX\Components\DialplanObjects;

class Vm extends BaseDialplanObject
{
    public function output(): string
    {
        return "VoiceMail(" . $this->data . ")";
    }
}
