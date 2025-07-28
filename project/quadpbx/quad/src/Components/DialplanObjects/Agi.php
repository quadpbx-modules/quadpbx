<?php

namespace QuadPBX\Components\DialplanObjects;

class Agi extends BaseDialplanObject
{
    public function output(): string
    {
        throw new \Exception("Reimplement this I guess");
        return "AGI(" . $data . ")";
    }
}
