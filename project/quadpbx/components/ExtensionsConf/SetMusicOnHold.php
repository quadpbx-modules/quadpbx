<?php

namespace QuadPBX\Components\ExtensionsConf;

class SetMusicOnHold extends Base
{
    public function output(): string
    {
        return "Set(CHANNEL(musicclass)=" . $this->data . ")";
    }
}
