<?php

namespace QuadPBX\Components\DialplanObjects;

class ParkAndAnnounce extends BaseDialplanObject
{
    public function output(): string
    {
        return "ParkAndAnnounce(" . $this->data . ")";
    }
}
