<?php

namespace QuadPBX\Components\DialplanObjects;

class Ringing extends BaseDialplanObject
{
    public function output(): string
    {
        return "Ringing()";
    }
}
