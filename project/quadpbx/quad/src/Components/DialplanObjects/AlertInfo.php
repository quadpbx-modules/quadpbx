<?php

namespace QuadPBX\Components\DialplanObjects;

class AlertInfo extends BaseDialplanObject
{
    public function output(): string
    {
        return "SIPAddHeader(Alert-Info: " . $this->data . ")";
    }
}
