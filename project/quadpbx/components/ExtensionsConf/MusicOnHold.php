<?php

namespace QuadPBX\Components\ExtensionsConf;

class MusicOnHold extends ExtBase
{
    public function output(): string
    {
        return "MusicOnHold(" . $this->data . ")";
    }
}
