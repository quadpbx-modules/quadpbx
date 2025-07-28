<?php

namespace QuadPBX\Components\DialplanObjects;

class MusicOnHold extends BaseDialplanObject
{
    public function output(): string
    {
        return "MusicOnHold(" . $this->data . ")";
    }
}
