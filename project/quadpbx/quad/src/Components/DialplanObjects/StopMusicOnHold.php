<?php

namespace QuadPBX\Components\DialplanObjects;

class StopMusicOnHold extends BaseDialplanObject
{
    public function output(): string
    {
        return "StopMusicOnHold()";
    }
}
