<?php

namespace QuadPBX\Components\DialplanObjects;

class ResponseTimeout extends BaseDialplanObject
{
    public function output(): string
    {
        return "Set(TIMEOUT(response)=" . $this->data . ")";
    }
}
