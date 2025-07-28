<?php

namespace QuadPBX\Components\DialplanObjects;

class CallCompletionCancel extends BaseDialplanObject
{
    public function output(): string
    {
        return "CallCompletionCancel(" . $this->data . ")";
    }
}
