<?php

namespace QuadPBX\Components\DialplanObjects;

class SendFax extends BaseDialplanObject
{
    public function output(): string
    {
        return "SendFAX(" . $this->data . ")";
    }
}
