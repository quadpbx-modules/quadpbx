<?php

namespace QuadPBX\Components\ExtensionsConf;

class ReceiveFax extends ExtBase
{
    public function output(): string
    {
        return "ReceiveFAX(" . $this->data . ")";
    }
}
