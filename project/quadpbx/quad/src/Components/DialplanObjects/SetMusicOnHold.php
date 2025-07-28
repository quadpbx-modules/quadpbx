<?php

namespace QuadPBX\Components\DialplanObjects;

class SetMusicOnHold extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(CHANNEL(musicclass)=" . $this->data . ")";
    }
}
