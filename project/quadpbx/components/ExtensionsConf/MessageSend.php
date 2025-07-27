<?php

namespace QuadPBX\Components\ExtensionsConf;

class MessageSend extends ExtBase
{
    public function output(): string
    {
        return "MessageSend(" . $this->data . "," . $this->options . ")";
    }
}
