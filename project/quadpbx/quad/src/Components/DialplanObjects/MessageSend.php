<?php

namespace QuadPBX\Components\DialplanObjects;

class MessageSend extends BaseDialplanObject
{
    public function output(): string
    {
        return "MessageSend(" . $this->data . "," . $this->options . ")";
    }
}
