<?php

namespace QuadPBX\Components\DialplanObjects;

class StartMusicOnHold extends BaseDialplanObject
{
    public function output(): string
    {
        return "StartMusicOnHold(" . $this->data . ")";
    }
}
