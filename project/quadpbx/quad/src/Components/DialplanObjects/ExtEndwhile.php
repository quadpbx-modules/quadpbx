<?php

namespace QuadPBX\Components\DialplanObjects;

class ExtEndWhile extends BaseDialplanObject
{
    public function output(): string
    {
        return "EndWhile";
    }
}
