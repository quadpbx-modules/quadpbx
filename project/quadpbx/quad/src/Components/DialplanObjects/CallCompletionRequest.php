<?php

namespace QuadPBX\Components\DialplanObjects;

class CallCompletionRequest extends BaseDialplanObject
{
    public function output(): string
    {
        return "CallCompletionRequest(" . $this->data . ")";
    }
}
