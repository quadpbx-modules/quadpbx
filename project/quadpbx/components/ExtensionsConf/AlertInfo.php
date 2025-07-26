<?php

namespace QuadPBX\Components\ExtensionsConf;

class AlertInfo extends Base
{
    public function output(): string
    {
        return "SIPAddHeader(Alert-Info: " . $this->data . ")";
    }
}
