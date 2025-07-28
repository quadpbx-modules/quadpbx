<?php

namespace QuadPBX\Components\DialplanObjects;

class Macro extends BaseDialplanObject
{
    public function __construct()
    {
        throw new \Exception("Macro is removed, fix the code");
    }

    public function output(): string
    {
        return "ERROR DO NOT USE MACRO";
    }
}
