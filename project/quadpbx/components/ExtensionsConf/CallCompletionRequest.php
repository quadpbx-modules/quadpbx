<?php

namespace QuadPBX\Components\ExtensionsConf;

class CallCompletionRequest extends Base
{
    public function output(): string
    {
        return "CallCompletionRequest(" . $this->data . ")";
    }
}
