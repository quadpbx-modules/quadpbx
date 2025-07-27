<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetHash extends ExtBase
{
    public function __construct()
    {
        throw new \Exception('Rebuild SetHash');
    }

    public function output(): string
    {
        return "SetHash(Bogus)";
    }
}
