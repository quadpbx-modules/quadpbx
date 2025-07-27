<?php

namespace QuadPBX\Components\ExtensionsConf;

class StartMusicOnHold extends ExtBase
{
    public function output(): string
    {
        return "StartMusicOnHold(" . $this->data . ")";
    }
}
