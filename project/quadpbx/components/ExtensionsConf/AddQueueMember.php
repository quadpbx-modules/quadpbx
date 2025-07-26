<?php

namespace QuadPBX\Components\ExtensionsConf;

class AddQueueMember extends Base
{
    public function output(): string
    {
        return "AddQueueMember(" . $this->data . "," . $this->options . ")";
    }
}
