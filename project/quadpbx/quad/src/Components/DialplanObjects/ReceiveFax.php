<?php

namespace QuadPBX\Components\DialplanObjects;

class ReceiveFax extends BaseDialplanObject
{
    public function output(): string
    {
        return "ReceiveFAX(" . $this->data . ")";
    }
}
