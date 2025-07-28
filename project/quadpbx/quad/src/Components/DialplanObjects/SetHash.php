<?php

namespace QuadPBX\Components\DialplanObjects;

class SetHash extends BaseDialplanObject
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
