<?php

namespace QuadPBX\Components\ExtensionsConf;

class ParkAndAnnounce extends Base
{
    public function output(): string
    {
        return "ParkAndAnnounce(" . $this->data . ")";
    }
}
