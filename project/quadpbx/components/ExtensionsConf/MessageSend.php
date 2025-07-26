<?php

namespace QuadPBX\Components\ExtensionsConf;

class MessageSend extends Base
{
    public function output(): string
    {
        return "MessageSend(" . $this->data . "," . $this->options . ")";
    }
}
