<?php

namespace QuadPBX\Components\DialplanObjects;

class Originate extends BaseDialplanObject
{
    public function __construct()
    {
        throw new \Exception('Originate class is not implemented yet');
    }
    public function output(): string
    {
        return 'Originate(Stuff)';
    }
}
