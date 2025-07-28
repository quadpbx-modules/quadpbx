<?php

namespace QuadPBX\Components\DialplanObjects;

class MacroExit extends BaseDialplanObject
{
    public function __construct()
    {
        throw new \Exception("Macroexit is removed, fix the code");
    }
    public function output(): string
    {
        return "ERROR ERROR MACROEXIT";
    }
}
