<?php

namespace QuadPBX\Components\ExtensionsConf;

class ReceiveFax extends Base
{
    public function output(): string
    {
        return "ReceiveFAX(" . $this->data . ")";
    }
}
