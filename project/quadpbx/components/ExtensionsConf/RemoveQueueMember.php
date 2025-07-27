<?php

namespace QuadPBX\Components\ExtensionsConf;

class RemoveQueueMember extends ExtBase
{
    public function output(): string
    {
        return "RemoveQueueMember(" . $this->data . "," . $this->options . ")";
    }
}
