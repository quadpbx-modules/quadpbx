<?php

namespace QuadPBX\Components\DialplanObjects;

class ExitWhile extends BaseDialplanObject
{
    public function output(): string
    {
        return "ExitWhile";
    }
}
