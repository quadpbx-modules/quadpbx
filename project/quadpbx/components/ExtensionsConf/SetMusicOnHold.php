<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetMusicOnHold extends ExtBase
{
    public function output(): string
    {
        return "Set(CHANNEL(musicclass)=" . $this->data . ")";
    }
}
