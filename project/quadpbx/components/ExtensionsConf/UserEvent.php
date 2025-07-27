<?php

namespace QuadPBX\Components\ExtensionsConf;

class UserEvent extends ExtBase
{
    public function output(): string
    {
        if ($this->options == '') {
            return "UserEvent(" . $this->data . ")";
        } else {
            return "UserEvent(" . $this->data . "," . $this->options . ")";
        }
    }
}
