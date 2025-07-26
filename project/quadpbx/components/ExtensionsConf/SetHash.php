<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetHash extends Base
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
