<?php

namespace QuadPBX\Components\DialplanObjects;

class ContinueWhile extends BaseDialplanObject
{
    public function output(): string
    {
        return "ContinueWhile";
    }
}
