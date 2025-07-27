<?php

namespace QuadPBX\Components\ExtensionsConf;

class Agi extends ExtBase
{
    public function output(): string
    {
        throw new \Exception("Reimplement this I guess");
        return "AGI(" . $data . ")";
    }
}
