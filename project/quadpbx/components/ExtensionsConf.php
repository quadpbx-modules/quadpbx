<?php

namespace QuadPBX\Components;

class ExtensionsConf
{
    public function getFilename(): string
    {
        return "extensions_quadpbx.conf";
    }

    public function __construct()
    {
        throw new \Exception("todo: Everything");
    }
}
