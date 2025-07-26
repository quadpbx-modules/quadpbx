<?php

namespace QuadPBX\Components\ExtensionsConf;

class MusicOnHold extends Base
{
    public function output(): string
    {
        return "MusicOnHold(" . $this->data . ")";
    }
}
