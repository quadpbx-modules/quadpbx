<?php

namespace QuadPBX\Components\ExtensionsConf;

class CallCompletionCancel extends ExtBase
{
    public function output(): string
    {
        return "CallCompletionCancel(" . $this->data . ")";
    }
}
