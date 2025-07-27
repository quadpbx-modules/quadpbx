<?php

namespace QuadPBX\Components\ExtensionsConf;

class ParkAndAnnounce extends ExtBase
{
    public function output(): string
    {
        return "ParkAndAnnounce(" . $this->data . ")";
    }
}
