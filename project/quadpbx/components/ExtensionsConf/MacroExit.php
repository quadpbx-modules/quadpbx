<?php

namespace QuadPBX\Components\ExtensionsConf;

class MacroExit extends ExtBase
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
