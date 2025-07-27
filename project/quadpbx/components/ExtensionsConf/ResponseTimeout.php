<?php

namespace QuadPBX\Components\ExtensionsConf;

class ResponseTimeout extends ExtBase
{
    public function output(): string
    {
        return "Set(TIMEOUT(response)=" . $this->data . ")";
    }
}
