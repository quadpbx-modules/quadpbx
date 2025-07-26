<?php

namespace QuadPBX\Components\ExtensionsConf;

class CallCompletionCancel extends Base
{
    public function output(): string
    {
        return "CallCompletionCancel(" . $this->data . ")";
    }
}
