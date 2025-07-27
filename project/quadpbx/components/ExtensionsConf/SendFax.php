<?php

namespace QuadPBX\Components\ExtensionsConf;

class SendFax extends ExtBase
{
    public function output(): string
    {
        return "SendFAX(" . $this->data . ")";
    }
}
