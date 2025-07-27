<?php

namespace QuadPBX\Components\ExtensionsConf;

class CallCompletionRequest extends ExtBase
{
    public function output(): string
    {
        return "CallCompletionRequest(" . $this->data . ")";
    }
}
