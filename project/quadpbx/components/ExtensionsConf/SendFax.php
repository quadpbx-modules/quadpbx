<?php

namespace QuadPBX\Components\ExtensionsConf;

class SendFax extends Base
{
    public function output(): string
    {
        return "SendFAX(" . $this->data . ")";
    }
}
