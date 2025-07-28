<?php

namespace QuadPBX\Components\DialplanObjects;

class RemoveQueueMember extends BaseDialplanObject
{
    public function output(): string
    {
        return "RemoveQueueMember(" . $this->data . "," . $this->options . ")";
    }
}
