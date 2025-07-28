<?php

namespace QuadPBX\Components\DialplanObjects;

class UserEvent extends BaseDialplanObject
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
