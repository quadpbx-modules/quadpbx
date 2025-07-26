<?php

namespace QuadPBX\Components\ExtensionsConf;

class StartMusicOnHold extends Base
{
    public function output(): string
    {
        return "StartMusicOnHold(" . $this->data . ")";
    }
}
