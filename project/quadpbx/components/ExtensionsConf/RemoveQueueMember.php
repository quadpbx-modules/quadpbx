<?php

namespace QuadPBX\Components\ExtensionsConf;

class RemoveQueueMember extends Base
{
    public function output(): string
    {
        return "RemoveQueueMember(" . $this->data . "," . $this->options . ")";
    }
}
