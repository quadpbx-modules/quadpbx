<?php

namespace QuadPBX\Components\ExtensionsConf;

class ResponseTimeout extends Base
{
    public function output(): string
    {
        return "Set(TIMEOUT(response)=" . $this->data . ")";
    }
}
