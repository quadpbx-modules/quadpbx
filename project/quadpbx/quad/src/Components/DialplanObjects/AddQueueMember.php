<?php

namespace QuadPBX\Components\DialplanObjects;

class AddQueueMember extends BaseDialplanObject
{
    public function output(): string
    {
        return "AddQueueMember(" . $this->data . "," . $this->options . ")";
    }
}
