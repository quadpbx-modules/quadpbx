<?php

namespace QuadPBX\Components\ExtensionsConf;

class AlertInfo extends ExtBase
{
    public function output(): string
    {
        return "SIPAddHeader(Alert-Info: " . $this->data . ")";
    }
}
